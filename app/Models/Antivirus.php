<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this line
use Illuminate\Database\Eloquent\Model;

class Antivirus extends Model
{
    use HasFactory; // Include this trait
    protected $table = 'svrantivirus_db';
}
