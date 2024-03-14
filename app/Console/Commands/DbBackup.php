<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Response;

class DbBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create database backup';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
{
    // Nama file backup
    $filename = 'backup_' . now()->timestamp . '.sql';

    // Command untuk membuat backup
    $command = 'mysqldump --user=' . env('DB_USERNAME') . ' --password=' . env('DB_PASSWORD') . ' --host=' . env('DB_HOST') . ' ' . env('DB_DATABASE');

    // Membuat proses
    $process = Process::fromShellCommandline($command);

    // Memulai proses
    $process->start();

    // Set header untuk memicu unduhan file
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Membaca output dan mengirimkan ke output HTTP
    while ($process->isRunning()) {
        echo $process->getOutput();
        flush();
        usleep(100000); // Jeda 0.1 detik
    }

    // Mengakhiri proses
    $process->stop();
}
}
