<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\Hero;
use App\Models\Team;
use App\Models\About;
use App\Models\Price;
use App\Models\Promo;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;

class UserController extends Controller
{
    public function home()
    {
        $hero = Hero::first();
        $about = About::first();
        $services = Service::latest()->get();
        $galleries = Gallery::latest()->take(6)->get();
        $teams = Team::all();
        $testimonials = Testimonial::latest()->get();
        $blogs = Blog::latest()->get();
        $promos = Promo::all();
        $prices = Price::all();
        $footer = Footer::first();
        return view('user.index', compact('hero','about','services','galleries','teams','testimonials','blogs','promos','prices','footer'));
    }
}
