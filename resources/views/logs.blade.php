@extends('dashboard')

@section('content')
<div class="p-6">
    <table class="min-w-full">
        <thead>
            <tr class="bg-gray-50">
                <th class="px-6 py-3 text-left">Server IP</th>
                <th class="px-6 py-3 text-left">Filename</th>
                <th class="px-6 py-3 text-left">File Size</th>
                <th class="px-6 py-3 text-left">Date Created</th>
                <th class="px-6 py-3 text-left">Time Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td class="px-6 py-4">{{ $log->server_ip }}</td> <!-- Uses the accessor from LogFile model -->
                <td class="px-6 py-4">{{ $log->filename }}</td>
                <td class="px-6 py-4">{{ $log->filesize }} bytes</td>
                <td class="px-6 py-4">{{ $log->datecrt }}</td>
                <td class="px-6 py-4">{{ $log->timecrt }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection