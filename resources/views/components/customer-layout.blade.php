<x-root-layout>
    @push('styles')
        @vite('resources/css/customer-layout.css')
    @endpush
    <x-header></x-header>
    <main class="page">
        {{ $slot }}
    </main>
</x-root-layout>
