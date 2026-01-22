@push('styles')
    @vite('resources/css/admin-order.css')
@endpush
<x-admin-layout>
    <h1>Nomor pesanan #{{ $order->id }}</h1>
    <p>Nama pelanggan: {{ $order->customer_name }}</p>
    <p>Tanggal pemesanan: {{ $order->created_at }}</p>
    <p>Status pesanan: {{ $order->status }}</p>
    <div>
        <h3>Daftar menu</h3>
        <table>
            <thead>
                <tr>
                    <th class="table-header">Nama menu</th>
                    <th class="table-header">Jumlah</th>
                    <th class="table-header">Harga</th>
                    <th class="table-header">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->menus as $menu)
                    <tr>
                        <td class="table-data">{{ $menu->name }}</td>
                        <td class="table-data">{{ $menu->pivot->menu_quantity }}</td>
                        <td class="table-data">{{ $menu->price }}</td>
                        <td class="table-data">{{ $menu->pivot->menu_quantity * $menu->price }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td class="table-data" colspan="3">Total harga</td>
                    <td class="table-data">{{ $order->menus->reduce(fn (?float $carry,  $menu) => $carry + $menu->pivot->menu_quantity * $menu->price) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h3>Aksi</h3>
        <div>
            <a href="/admin/orders">Kembali</a>
            @if ($order->status === 'pending')
                <form action="/admin/order/{{ $order->id }}/status" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="status" value="processing">
                    <button>Tandai sebagai diproses</button>
                </form>
                <form action="/admin/order/{{ $order->id }}/status" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="status" value="canceled">
                    <button>Tandai sebagai dibatalkan</button>
                </form>
            @elseif ($order->status === 'processing')
                <form action="/admin/order/{{ $order->id }}/status" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="status" value="finished">
                    <button>Tandai sebagai selesai</button>
                </form>
            @endif
        </div>
    </div>
</x-admin-layout>
