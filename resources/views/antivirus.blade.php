@extends('dashboard')

@section('content')
<div class="p-6">
    <table class="min-w-full">
        <thead>
            <tr class="bg-gray-50">
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Server IP</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Last Update</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Date Recorded</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase">Time Recorded</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($antivirus as $av)
            <tr>
                <td class="px-6 py-4">{{ $av->svrip }}</td>
                <td class="px-6 py-4">{{ $av->last_update }}</td>
                <td class="px-6 py-4">{{ $av->datecrt }}</td>
                <td class="px-6 py-4">{{ $av->timecrt }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection