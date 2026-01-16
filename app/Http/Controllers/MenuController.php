<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(Request $request): View
    {
        $data = Menu::where('is_available', true);

        $categories = $data
            ->latest()
            ->get()
            ->map(function ($menu) {
                return $menu->category;
            })
            ->unique();

        $searchPlaceholder = $data->get();

        if ($searchPlaceholder->isNotEmpty()) {
            $searchPlaceholder = $searchPlaceholder->random()->name;
        } else {
            $searchPlaceholder = null;
        }

        if ($request->query('search') !== null) {
            $data = $data->ofSearch($request->query('search'));
        }

        if ($request->query('category') !== null) {
            $data = $data->ofCategory($request->query('category'));
        }

        $data = $data
            ->latest()
            ->get()
            ->groupBy(function ($menu) {
                return $menu->category;
            });

        return view('menus', [
            'data' => $data,
            'categories' => $categories,
            'searchPlaceholder' => $searchPlaceholder,
        ]);
    }
}
