<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = Admin::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        $menuImage = Storage::disk('public')->putFile('uploads', new File(public_path('images/steak.jpg')));

        Menu::create([
            'admin_id'     => $admin->id,
            'name'         => 'Steak',
            'price'        => 30000,
            'category'     => 'food',
            'is_available' => true,
            'image'        => $menuImage,
        ]);

        $menuImage = Storage::disk('public')->putFile('uploads', new File(public_path('images/hamburger.jpg')));

        Menu::create([
            'admin_id'     => $admin->id,
            'name'         => 'Hamburger',
            'price'        => 40000,
            'category'     => 'food',
            'is_available' => true,
            'image'        => $menuImage,
        ]);

        $menuImage = Storage::disk('public')->putFile('uploads', new File(public_path('images/pasta.jpg')));

        Menu::create([
            'admin_id'     => $admin->id,
            'name'         => 'Pasta',
            'price'        => 25000,
            'category'     => 'food',
            'is_available' => true,
            'image'        => $menuImage,
        ]);
    }
}
