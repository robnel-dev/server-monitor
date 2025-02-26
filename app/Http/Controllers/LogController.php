<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogFile;
class LogController extends Controller
{
    public function index()
    {
        // Fetch log data (matching your senior developer's SQL query)
        $logs = LogFile::whereDate('datecrt', today())
            ->where('filename', '<>', 'DB.XLSX')
            ->where('svrstat', 1)
            ->orderBy('svrip')
            ->orderBy('filename')
            ->get();

        return view('logs', compact('logs'));
    }
}
