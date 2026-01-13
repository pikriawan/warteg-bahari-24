<x-root-layout>
    @push('styles')
        @vite('resources/css/customer-layout.css')
    @endpush
    <x-header></x-header>
    <div class="page">
        {{ $slot }}
    </div>
    <footer class="footer">
        <p>&copy 2026 Warteg Bahari 24</p>
    </footer>
</x-root-layout>
