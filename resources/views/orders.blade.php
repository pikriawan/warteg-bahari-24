<x-customer-layout>
    @if (count($orders) > 0)
        <ul>
            @foreach ($orders as $order)
                <li>
                    <p>
                        <a href="/order/{{ $order->id }}">Nomor pesanan: {{ $order->id }}</a>
                    </p>
                    <p>Nama: {{ $order->customer_name }}</p>
                    <p>Status: {{ $order->status }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>Kamu belum pesan apapun</p>
    @endif
</x-customer-layout>
