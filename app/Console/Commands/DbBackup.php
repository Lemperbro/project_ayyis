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
    $filename = 'hmm.sql';
    
    // Lokasi penyimpanan file backup
    $backupPath = public_path('backup/' . $filename);
    
    // Dump database ke file
    $dumpCommand = 'mysqldump --user=' . env('DB_USERNAME') . ' --password=' . env('DB_PASSWORD') . ' --host=' . env('DB_HOST') . ' ' . env('DB_DATABASE') . ' > ' . $backupPath;
    exec($dumpCommand);
    
    // Set header untuk memicu unduhan file
    return redirect($backupPath);
}
}
