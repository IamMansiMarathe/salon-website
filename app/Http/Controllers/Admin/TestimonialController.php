<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
{
    $testimonials = Testimonial::latest()->get();
    return view('admin.testimonials.index', compact('testimonials'));
}

public function create()
{
    return view('admin.testimonials.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name'       => 'required',
        'profession' => 'nullable',
        'message'    => 'required',
        'image'      => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('testimonials', 'public');
    }

    Testimonial::create($data);
    return redirect()->route('admin.testimonials.index');
}

public function edit(Testimonial $testimonial)
{
    return view('admin.testimonials.edit', compact('testimonial'));
}

public function update(Request $request, Testimonial $testimonial)
{
    $data = $request->validate([
        'name'       => 'required',
        'profession' => 'nullable',
        'message'    => 'required',
        'image'      => 'nullable|image'
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('testimonials', 'public');
    }

    $testimonial->update($data);
    return redirect()->route('admin.testimonials.index');
}

public function destroy(Testimonial $testimonial)
{
    $testimonial->delete();
    return back();
}
}
