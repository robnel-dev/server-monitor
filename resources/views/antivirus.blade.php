@extends('dashboard')

@section('content')
<div class="p-6">
    <table class="min-w-full">
        <thead>
            <tr class="bg-gray-50">
                <th class="px-6 py-3 text-left">Server IP</th>
                <th class="px-6 py-3 text-left">Last Update</th>
                <th class="px-6 py-3 text-left">Date Recorded</th>
                <th class="px-6 py-3 text-left">Time Recorded</th>
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