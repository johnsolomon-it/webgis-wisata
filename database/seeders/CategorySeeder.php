<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Ikon Kota',
            'Museum, Pusat Kebudayaan & Edukasi',
            'Kuliner Legendaris',
            'Tempat Ibadah Bersejarah',
            'Ruang Publik & Taman',
            'Pusat Belanja & Pasar',
            'Taman Hiburan',
            'Wisata Hewan & Alam',
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category]);
        }
    }
}
