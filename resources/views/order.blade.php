<x-customer-layout>
    @push('styles')
        @vite('resources/css/order.css')
    @endpush
    <div>
        <p>Nomor pesanan: {{ $order->id }}</p>
        <p>Nama: {{ $order->customer_name }}</p>
        <p>Status pesanan: {{ $order->status }}</p>
        @if ($order->status !== 'finished' && $order->status !== 'canceled')
            <p>*Silahkan lakukan pembayaran melalui kasir</p>
        @endif
    </div>
</x-customer-layout>
