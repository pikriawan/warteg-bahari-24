@push('styles')
    @vite('resources/css/admin-orders.css')
@endpush
<x-admin-layout>
    <h1>Daftar pesanan</h1>
    @if (count($orders) > 0)
        <table>
            <thead>
                <tr>
                    <th class="table-header">No. pesanan</th>
                    <th class="table-header">Nama pelanggan</th>
                    <th class="table-header">Tanggal pemesanan</th>
                    <th class="table-header">Status pesanan</th>
                    <th class="table-header">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="table-data">{{ $order->id }}</td>
                        <td class="table-data">{{ $order->customer_name }}</td>
                        <td class="table-data">{{ $order->created_at }}</td>
                        <td class="table-data">{{ $order->status }}</td>
                        <td class="table-data">
                            <a href="/admin/order/{{ $order->id }}">Detail</a>
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada pesanan</p>
    @endif
</x-admin-layout>
