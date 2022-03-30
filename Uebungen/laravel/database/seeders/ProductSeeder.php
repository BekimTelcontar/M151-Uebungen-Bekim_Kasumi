<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'FC Bayern München 21/22 Heimtrikot',
            'price' => 100.00,
            'details' => 'Klassisches Heimtrikot des FC Bayern mit den Vereinsfarben rot und weiss, erstmals mit Fünf Sternen',
            'manual' => 'Spielername auf der Rückseite',
            'image' => 'images\BayernHome2122.jpg'
        ]);
        Product::create([
            'name' => 'FC Bayern München 21/22 Auswärtstrikot',
            'price' => 100.00,
            'details' => 'Das diesjährige Auswärtstrikot des FC Bayern in schwarz und gold',
            'manual' => 'Spielername auf der Rückseite',
            'image' => 'images\BayernAway2122.jpg'
        ]);
    }
}
