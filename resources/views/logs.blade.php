@extends('dashboard')

@section('content')
<div class="p-6">
    <table class="min-w-full">
        <thead>
            <tr class="bg-gray-50">
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Server IP</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Filename</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">File Size</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Date Created</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Time Created</th>
                <th class="px-3 py-3 text-left text-sm font-medium text-gray-900 uppercase">Action</th>
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
                <td> <a href="{{ route('disks') }}" class="px-4 py-2 bg-blue-500 text-white rounded">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection