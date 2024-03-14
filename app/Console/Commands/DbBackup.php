<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
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
        $filename = 'backup_' . strtotime(now()) . '.sql';
    
        // Lokasi penyimpanan file backup
        $backupPath = storage_path('app/backup/' . $filename);
    
        // Command untuk membuat backup
        $command = 'mysqldump --user=' . env('DB_USERNAME') . ' --password=' . env('DB_PASSWORD') . ' --host=' . env('DB_HOST') . ' ' . env('DB_DATABASE') . ' > ' . $backupPath;
    
        // Eksekusi perintah untuk membuat backup
        exec($command);
    
        // Inisialisasi unduhan file backup
        return response()->download($backupPath, $filename)->deleteFileAfterSend();
    }
}
