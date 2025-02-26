<?php

namespace Database\Factories;

use App\Models\LogFile;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogFileFactory extends Factory {
    protected $model = LogFile::class;

    public function definition() {
        return [
            'svrip' => $this->faker->randomElement(['192.168.1.239', $this->faker->ipv4]), // Test IP replacement
            'filename' => $this->faker->word . '.log',
            'filesize' => $this->faker->numberBetween(100, 5000),
            'datecrt' => now()->toDateString(),
            'timecrt' => now()->toTimeString(),
            'svrstat' => 1,
        ];
    }
}