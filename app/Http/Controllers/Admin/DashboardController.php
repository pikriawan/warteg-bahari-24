<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function show(): View
    {
        $totalRevenue = Order::where('status', 'finished')->get()->reduce(function (?float $carry, $order) {
            return $carry + $order->menus->reduce(function (?float $carry, $menu) {
                return $carry + $menu->price * $menu->pivot->menu_quantity;
            }, 0);
        }, 0);

        $totalSales = Order::where('status', 'finished')->count();

        $totalMenus = Menu::all()->count();

        return view('admin.dashboard', [
            'totalRevenue' => $totalRevenue,
            'totalSales' => $totalSales,
            'totalMenus' => $totalMenus,
        ]);
    }
}
