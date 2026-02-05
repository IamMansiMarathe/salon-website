<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'About Us',
            'subtitle' => 'Why People Choose Us!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
            'image' => 'about.jpg',
            'phone' => '+0123456789',
            'experience' => 25,
            'happy_customers' => 999,
        ]);
    }
}
