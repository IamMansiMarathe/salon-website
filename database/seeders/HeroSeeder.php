<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
        'small_title' => 'Welcome',
        'main_title' => 'Beauty Salon Fashion for Women',
        'phone' => '+123456789',
        'email' => 'info@domain.com',
        'image_1' => 'hero-slider-1.jpg',
        'image_2' => 'hero-slider-2.jpg',
        'image_3' => 'hero-slider-3.jpg',
    ]);
    }
}
