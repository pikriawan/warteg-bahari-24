<x-customer-layout>
    @push('styles')
        @vite('resources/css/menu.css')
    @endpush
    <h1>Menu</h1>
    <div class="menu-list">
        @foreach ($menus as $menu)
            <div>
                <img class="menu-image" src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="128" height="128">
                <h3>{{ $menu->name }}</h3>
                <p>{{ $menu->price }}</p>
                <p>{{ $menu->category }}</p>
                <p>{{ $menu->is_available ? 'Tersedia' : 'Habis' }}</p>
                <button>Tambah</button>
            </div>
        @endforeach
    </div>
</x-customer-layout>
