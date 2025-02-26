<?php

namespace Database\Factories;

use App\Models\Antivirus;
use Illuminate\Database\Eloquent\Factories\Factory;

class AntivirusFactory extends Factory {
    protected $model = Antivirus::class;

    public function definition() {
        return [
            'svrip' => $this->faker->ipv4,
            'last_update' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'datecrt' => now()->toDateString(),
            'timecrt' => now()->toTimeString(),
            'svrstat' => 1,
        ];
    }
}