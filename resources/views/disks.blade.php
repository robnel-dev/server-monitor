@extends('dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Status Legend -->
        <div class="mb-6 flex gap-3">
            <span class="px-3 py-1.5 bg-red-100 text-red-800 rounded-full text-sm font-medium">
                Critical 🔴
            </span>
            <span class="px-3 py-1.5 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">
                Warning 🟡
            </span>
            <span class="px-3 py-1.5 bg-green-100 text-green-800 rounded-full text-sm font-medium">
                Normal 🟢
            </span>
        </div>
<div class="p-6">
    <table class="min-w-full">
        <thead>
            <tr class="bg-gray-50">
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Server IP</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Drive</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Total Size</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Free Space</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disks as $disk)
            <tr>
                <td class="px-6 py-4">{{ $disk->svrip }}</td>
                <td class="px-6 py-4">{{ $disk->drvletter }}</td>
                <td class="px-6 py-4">{{ $disk->drvsizetotal }} GB</td>
                <td class="px-6 py-4">{{ $disk->free_space }} GB</td>
                <td class="px-6 py-4">
                    @if(str_contains($disk->status, '🔴'))
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded">🔴</span>
                    @elseif(str_contains($disk->status, '🟡'))
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">🟡 </span>
                    @else
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded">🟢 </span>
                    @endif
                </td>
                <td> <a href="{{ route('disks') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Action</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection