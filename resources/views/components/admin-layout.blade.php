@push('styles')
    @vite('resources/css/admin-layout.css')
@endpush
<x-root-layout>
    <div class="page">
        <x-admin-sidebar></x-admin-sidebar>
        <main class="main">
            {{ $slot }}
        </main>
    </div>
</x-root-layout>
