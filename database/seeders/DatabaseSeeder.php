<?php

namespace Database\Seeders;

use App\Models\Storage;
use App\Models\Antivirus;
use App\Models\LogFile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        // Generate 5 Disk Metrics
        Storage::factory()->count(5)->create();

        // Generate 5 Antivirus Records
        Antivirus::factory()->count(5)->create();

        // Generate 5 Log Files
        LogFile::factory()->count(5)->create();
    }
}