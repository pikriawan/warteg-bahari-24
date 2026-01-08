<x-admin-layout>
    @push('styles')
        @vite('resources/css/admin-menus.css')
    @endpush
    <h1>Menu</h1>
    <a href="/admin/menu/create">Buat menu baru</a>
    <div class="menu-list">
        @foreach ($menus as $menu)
            <div>
                <img class="menu-image" src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="128" height="128">
                <h3>{{ $menu->name }}</h3>
                <p>Harga: {{ $menu->price }}</p>
                <p>Kategori: {{ $menu->category === null ? 'uncategorized' : $menu->category }}</p>
                <p>{{ $menu->is_available ? 'Tersedia' : 'Habis' }}</p>
                <a href="/admin/menu/{{ $menu->id }}">Edit menu</a>
            </div>
        @endforeach
    </div>
</x-admin-layout>
