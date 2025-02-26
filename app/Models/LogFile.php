<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this line
use Illuminate\Database\Eloquent\Model;

class LogFile extends Model
{
    use HasFactory; // Include this trait

    protected $table = 'svrfiles_db';

    // Replace IP 192.168.1.239 with 192.168.1.20
    public function getServerIpAttribute() {
        return $this->svrip === '192.168.1.239' ? '192.168.1.20' : $this->svrip;
    }
}
