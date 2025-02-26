<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antivirus;

class AntivirusController extends Controller
{
    public function index()
    {
        // Fetch antivirus data (matching your senior developer's SQL query)
        $antivirus = Antivirus::whereDate('datecrt', today())
            ->where('svrstat', 1)
            ->orderBy('svrip')
            ->get();

        return view('antivirus', compact('antivirus'));
    }
}
