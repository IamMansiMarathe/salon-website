<?php

use App\Models\Footer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\PromoController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

//user routes 
// Route::get('/', function () {
//     return view('user.index');
// });

// Route::get('/footer', function () {
//     $footer = Footer::first();
//     return view('user.layouts.app',compact('footer'));
// });


Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/price', [PageController::class, 'price'])->name('price');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/404', [PageController::class, 'error404'])->name('404');

// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

//admin auth  routes
Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

//admin panel routes

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/hero', [HeroController::class, 'index'])->name('admin.hero.index');
    Route::get('hero/{hero}/edit', [HeroController::class, 'edit'])->name('admin.hero.edit');
    Route::put('hero/{hero}', [HeroController::class, 'update'])->name('admin.hero.update');

    Route::get('about', [AboutController::class, 'index'])->name('admin.about.index');
    Route::get('about/create', [AboutController::class, 'create'])->name('admin.about.create');
    Route::post('about', [AboutController::class, 'store'])->name('admin.about.store');
    Route::get('about/{about}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::put('about/{about}', [AboutController::class, 'update'])->name('admin.about.update');
    Route::delete('about/{about}', [AboutController::class, 'destroy'])->name('admin.about.destroy');

    // SERVICES ROUTES
    Route::get('services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');


    Route::get('gallery', [GalleryController::class,'index'])->name('admin.gallery.index');
    Route::get('gallery/create', [GalleryController::class,'create'])->name('admin.gallery.create');
    Route::post('gallery', [GalleryController::class,'store'])->name('admin.gallery.store');
    Route::delete('gallery/{gallery}', [GalleryController::class,'destroy'])->name('admin.gallery.destroy');
    
    Route::get('teams', [TeamController::class,'index'])->name('admin.teams.index');
    Route::get('teams/create', [TeamController::class,'create'])->name('admin.teams.create');
    Route::post('teams', [TeamController::class,'store'])->name('admin.teams.store');
    Route::get('teams/{team}/edit', [TeamController::class,'edit'])->name('admin.teams.edit');
    Route::put('teams/{team}', [TeamController::class,'update'])->name('admin.teams.update');
    Route::delete('teams/{team}', [TeamController::class,'destroy'])->name('admin.teams.destroy');
     
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');
    
    Route::get('blogs', [\App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('blogs/create', [\App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('blogs/store', [\App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blogs.store');
    // Route::get('/blogs/{blog}', [App\Http\Controllers\admin\BlogController::class, 'show'])->name('admin.blogs.show');
    Route::get('blogs/edit/{blog}', [\App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('blogs/update/{blog}', [\App\Http\Controllers\Admin\BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('blogs/delete/{blog}', [\App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('admin.blogs.destroy');

    Route::get('pricing', [PricingController::class, 'index'])->name('admin.pricing.index');
    
    // Prices CRUD
    Route::get('prices', [PriceController::class, 'index'])->name('admin.prices.index');
    Route::get('prices/create', [PriceController::class, 'create'])->name('admin.prices.create');
    Route::post('prices/store', [PriceController::class, 'store'])->name('admin.prices.store');
    Route::get('prices/{price}/edit', [PriceController::class, 'edit'])->name('admin.prices.edit');
    Route::put('prices/{price}', [PriceController::class, 'update'])->name('admin.prices.update');
    Route::delete('prices/{price}', [PriceController::class, 'destroy'])->name('admin.prices.destroy');


    // Promo CRUD
    Route::get('promo', [PromoController::class, 'index'])->name('admin.promos.index');
    Route::get('promo/create', [PromoController::class, 'create'])->name('admin.promos.create');
    Route::post('promo/store', [PromoController::class, 'store'])->name('admin.promos.store');
    Route::get('promo/{promo}/edit', [PromoController::class, 'edit'])->name('admin.promos.edit');
    Route::put('promo/{promo}', [PromoController::class, 'update'])->name('admin.promos.update');
    Route::delete('promo/{promo}', [PromoController::class, 'destroy'])->name('admin.promos.destroy');
    
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');
    Route::delete('/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('admin.contacts.destroy');
    
        // footer CRUD
        Route::get('footer', [FooterController::class, 'index'])->name('admin.footer.index');
        Route::get('footer/edit', [FooterController::class, 'edit'])->name('admin.footer.edit');
        Route::put('footer/{footer}', [FooterController::class, 'update'])->name('admin.footer.update');
        // Route::delete('footer', [FooterController::class, 'destroy'])->name('admin.footer.destroy');

});
    
// Route::get('/404', function(){
//     return view('errors.404');
// })->name('404');


// Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
// Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
