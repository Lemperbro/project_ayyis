<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
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
        $filename = 'backup_' . now()->timestamp . '.sql';
        $path = storage_path('app/backup/' . $filename);
        $host = env('DB_HOST');
        $database = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
    
        $command = "mysqldump --host={$host} --user={$username} --password={$password} {$database} > {$path}";
    
        // Jalankan perintah untuk membuat backup
        exec($command);
    
        // Simpan backup ke penyimpanan yang diinginkan (misalnya, storage)
        Storage::disk('local')->put('backup/' . $filename, file_get_contents($path));
    
        // Hapus file backup sementara
        unlink($path);
    }
}
