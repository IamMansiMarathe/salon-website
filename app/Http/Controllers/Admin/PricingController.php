<?php

namespace App\Http\Controllers\Admin;

use App\Models\Price;
use App\Models\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function index()
    {
        $promos = Promo::latest()->get();
        $prices = Price::latest()->get();
        return view('admin.pricing.index', compact('promos', 'prices'));
    }
}
