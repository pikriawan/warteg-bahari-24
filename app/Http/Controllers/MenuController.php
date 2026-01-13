<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(Request $request): View
    {
        $data = Menu::where('is_available', true)
            ->latest()
            ->get()
            ->groupBy(function ($menu) {
                return $menu->category;
            });

        return view('menus', [
            'data' => $data,
        ]);
    }
}
