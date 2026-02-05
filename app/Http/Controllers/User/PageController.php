<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\Team;
use App\Models\About;
use App\Models\Price;
use App\Models\Promo;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class PageController extends Controller
{
    public function about()
    {
        // Fetch dynamic about data
        $about = About::first(); 
        $teams = Team::all();
        $footer = Footer::first();
        return view('user.pages.about', compact('about','teams','footer'));
    }

    public function service()
    {
        $services = Service::all();
        $testimonials = Testimonial::all();
        $footer = Footer::first();
        return view('user.pages.service', compact('services','testimonials','footer'));
    }

    public function price()
    {
        $prices = Price::all();
        $promos = Promo::all();
        $footer = Footer::first();
        return view('user.pages.price', compact('prices','promos','footer'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        $footer = Footer::first(); 
        return view('user.pages.gallery', compact('galleries','footer'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $footer = Footer::first();
        return view('user.pages.blog', compact('blogs','footer'));
    }
 
    public function team()
    {
    $teams = Team::all();
    $footer = Footer::first();
    return view('user.pages.team', compact('teams','footer'));
    }
    
    public function testimonial()
    {
        $testimonials = Testimonial::all();
        $footer = Footer::first();
        return view('user.pages.testimonial', compact('testimonials','footer'));
    }

    public function contact()
    {
        $contact = Contact::all();
        $footer = Footer::first();
        return view('user.pages.contact', compact('contact','footer'));
    }

    public function error404()
    {
        $footer = Footer::first();
        return view('user.errors.404', compact('footer'));
    }
}
