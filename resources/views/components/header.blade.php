@php
    use App\Models\Customer;

    $customer = Customer::where('session_id', session()->getId())->first();
    $cart = $customer
        ->orders
        ->where('status', null)
        ->first();
    $menus = $cart->menus;

    $totalQuantity = $menus->reduce(function (?float $carry, $menu) {
        return $carry + $menu->pivot->menu_quantity;
    });
@endphp
@push('styles')
    @vite('resources/css/header.css')
@endpush
@push('scripts')
    @vite('resources/js/header.js')
@endpush
<header class="header">
    <button class="button-base mobile-navbar-toggle" id="mobileNavbarToggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-text-align-justify-icon lucide-text-align-justify"><path d="M3 5h18"/><path d="M3 12h18"/><path d="M3 19h18"/></svg>
    </button>
    <a href="/">
        <img src="/images/warteg-bahari-24.svg" alt="Warteg Bahari 24" width="128">
    </a>
    <div class="mobile-cart-link-container">
        <a class="button button-primary cart-link" href="/cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-basket-icon lucide-shopping-basket"><path d="m15 11-1 9"/><path d="m19 11-4-7"/><path d="M2 11h20"/><path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8a2 2 0 0 0 2-1.6l1.7-7.4"/><path d="M4.5 15.5h15"/><path d="m5 11 4-7"/><path d="m9 11 1 9"/></svg>
            @if ($totalQuantity !== null)
                <span class="menu-quantity-counter">{{ $totalQuantity }}</span>
            @endif
        </a>
    </div>
    <nav class="mobile-navbar" id="mobileNavbar">
        <a class="navbar-link" href="/">Beranda</a>
        <a class="navbar-link" href="/menus">Menu</a>
        <a class="navbar-link" href="/orders">Pesanan</a>
    </nav>
    <nav class="desktop-navbar">
        <a class="navbar-link" href="/">Beranda</a>
        <a class="navbar-link" href="/menus">Menu</a>
        <a class="navbar-link" href="/orders">Pesanan</a>
        <a class="button button-primary cart-link" href="/cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-basket-icon lucide-shopping-basket"><path d="m15 11-1 9"/><path d="m19 11-4-7"/><path d="M2 11h20"/><path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8a2 2 0 0 0 2-1.6l1.7-7.4"/><path d="M4.5 15.5h15"/><path d="m5 11 4-7"/><path d="m9 11 1 9"/></svg>
            Keranjang
            @if ($totalQuantity !== null)
                <span class="menu-quantity-counter">{{ $totalQuantity }}</span>
            @endif
        </a>
    </nav>
</header>
