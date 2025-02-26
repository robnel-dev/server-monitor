<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Server Monitoring Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Navigation -->
            <div class="mb-4 flex gap-4">
                <a href="{{ route('disks') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Disk Size</a>
                <a href="{{ route('antivirus') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Antivirus</a>
                <a href="{{ route('logs') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Logs</a>
            </div>

            <!-- Content Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @yield('content') <!-- This will be replaced by child views -->
            </div>
        </div>
    </div>
</x-app-layout>