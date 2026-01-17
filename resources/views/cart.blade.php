@push('styles')
    @vite('resources/css/cart.css')
@endpush
<x-customer-layout>
    <main class="main">
        <h1 class="cart-title">Keranjang</h1>
        @if (count($menus) > 0)
            <div class="mobile-menu-list">
                <div class="mobile-menu-list-container">
                    @foreach ($menus as $menu)
                        <div class="menu">
                            <img class="menu-image" src="{{ $menu->image === null ? '/images/menu-no-image.png' : asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="64" height="64">
                            <div class="menu-detail">
                                <p class="menu-title">{{ $menu->name }}</p>
                                <div class="menu-bottom">
                                    <p class="menu-price">{{ floor($menu->price) == $menu->price ? 'Rp ' . number_format($menu->price, 0, ',', '.') . ',-' : 'Rp ' . number_format($menu->price, 2, ',', '.') }}</p>
                                    <div class="menu-quantity">
                                        <form class="menu-quantity-decrement-form" action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                            <input type="hidden" name="action" value="decrement">
                                            <button class="button-base menu-quantity-decrement-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-minus-icon lucide-minus"><path d="M5 12h14"/></svg>
                                            </button>
                                        </form>
                                        <span class="menu-quantity-text">{{ $menu->pivot->menu_quantity }}</span>
                                        <form class="menu-quantity-increment-form" action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                            <input type="hidden" name="action" value="increment">
                                            <button class="button-base menu-quantity-increment-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="total-price">
                    <p class="total-price-title">Total Harga</p>
                    <p class="total-price-text">{{ floor($totalPrice) == $totalPrice ? 'Rp ' . number_format($totalPrice, 0, ',', '.') . ',-' : 'Rp ' . number_format($totalPrice, 2, ',', '.') }}</p>
                </div>
            </div>
        @else
            <div class="cart-empty">
                <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24" fill="none" stroke="#0A5D0C" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-basket-icon lucide-shopping-basket"><path d="m15 11-1 9"/><path d="m19 11-4-7"/><path d="M2 11h20"/><path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8a2 2 0 0 0 2-1.6l1.7-7.4"/><path d="M4.5 15.5h15"/><path d="m5 11 4-7"/><path d="m9 11 1 9"/></svg>
                <p class="cart-empty-text">Keranjangmu kosong!</p>
                <a class="button button-primary" href="/menus">Yuk, isi keranjangmu sekarang!</a>
            </div>
        @endif
    </main>
</x-customer-layout>
