<x-root-layout>
    @push('styles')
        @vite('resources/css/customer-layout.css')
    @endpush
    <x-header></x-header>
    <div class="page">
        {{ $slot }}
    </div>
</x-root-layout>
