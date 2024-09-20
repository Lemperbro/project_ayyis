<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

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
        $filename = 'backup_' . strtotime(now()) . '.sql';
        $command = 'mysqldump --user=' . env('DB_USERNAME') . ' --password=' . env('DB_PASSWORD') . ' --host=' . env('DB_HOST') . ' ' . env('DB_DATABASE') . ' > ' . storage_path() . '/app/backup/' . $filename;

        exec($command);

        // Dapatkan output dari perintah backup
        $output = Artisan::output();

        // Nama file backup

        // Simpan output backup ke file sementara
        Storage::put('/app/backup/' . $filename, $output);

        // Set header untuk memicu unduhan file
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Baca file dan kirimkan ke output HTTP
        readfile(Storage::path('/app/backup/' . $filename));
    }
}
