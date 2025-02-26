<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this line
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory; // Include this trait
    protected $table = 'svrstorage_db';

    // Calculate free space percentage
    public function getFreeSpaceAttribute() {
        return (int) preg_replace('/[^0-9]/', '', $this->drvsize_free);
    }

    // Status logic (Critical/Warning/Normal)
    public function getStatusAttribute() {
        $percentage = ($this->free_space / $this->drvsizetotal) * 100;
        return match(true) {
            $percentage <= 20 => 'Critical 🔴',
            $percentage <= 25 => 'Warning 🟡',
            default => 'Normal 🟢'
        };
    }
}
