<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders', [
            'orders' => Order::whereNotNull('status')->get(),
        ]);
    }

    public function show(Order $order)
    {
        if ($order->status === null) {
            abort(404);
        }

        return view('admin.order', [
            'order' => $order,
        ]);
    }

    public function updateStatus(Request $request, Order $order): RedirectResponse
    {
        $request->validate([
            'status' => ['required', 'string', 'in:processing,finished,canceled'],
        ]);

        $status = $request->string('status');

        if ($order->status === 'finished' || $order->status === 'canceled') {
            return back();
        }

        if ($order->status === 'pending' && $status != 'processing' && $status != 'canceled') {
            return back();
        }

        if ($order->status === 'processing' && $status != 'finished') {
            return back();
        }

        $order->status = $status;

        $order->save();

        return back();
    }
}
