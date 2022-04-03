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
            'name' => 'Blumentopf',
            'price' => 8.50,
            'details' => 'Einfacher Blumentopf, leicht zerbrechlich',
            'manual' => 'Verwendbar für Blumen und andere Pflanzen',
            'image' => 'images\topf.jpg'
        ]);
        Product::create([
            'name' => 'Kleinhacke',
            'price' => 32.50,
            'details' => 'Gefertigt aus hochwertigsten Spezialstählen und heimischer Esche',
            'manual' => 'Trennt Wurzeln und lockert den Boden',
            'image' => 'images\kleinhacke.jpg'
        ]);
    }
}
