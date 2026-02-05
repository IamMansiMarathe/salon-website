<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'description' => 'Salone is a premium beauty salon offering professional hair, makeup, and skincare services to help you look and feel your best.',
            'address' => '2nd Floor, City Center Mall, College Road, Nashik, Maharashtra',
            'contact' => '+91 98765 43210',
            'email' => 'info@salone.com',
        ]);
    }
}
