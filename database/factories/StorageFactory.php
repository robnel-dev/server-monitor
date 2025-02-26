<?php

namespace Database\Factories;

use App\Models\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class StorageFactory extends Factory {
    protected $model = Storage::class;

    public function definition() {
        $totalSize = $this->faker->numberBetween(100, 1000); // e.g., 500 GB
        $percentage = $this->faker->randomElement([15, 20, 25, 30]); // 15% (Critical), 20% (Critical), 25% (Warning), 30% (Normal)
        $freeSpace = (int) ($totalSize * ($percentage / 100));

        return [
            'svrip' => $this->faker->ipv4,
            'server_name' => $this->faker->randomElement(['Web Server', 'Database Server', 'Backup Server']),
            'drvletter' => $this->faker->randomElement(['C', 'D', 'E']),
            'drvsizetotal' => $totalSize,
            'drvsize_free' => $freeSpace . 'GB', // Simulate SUBSTRING cleanup in model
            'datecrt' => now()->toDateString(),
            'timecrt' => now()->toTimeString(),
            'svrstat' => 1,
        ];
    }
}