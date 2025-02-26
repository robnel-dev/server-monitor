<?php

namespace App\Http\Controllers;
use App\Models\Storage;
use Illuminate\Http\Request;

class DiskController extends Controller
{
    public function index() {
        $disks = Storage::whereDate('datecrt', today())
            ->whereNotIn('svrip', ['192.168.1.110', '192.168.44.139'])
            ->where('svrstat', 1)
            ->orderBy('svrip')
            ->get();

        return view('disks', compact('disks'));
    }
}
