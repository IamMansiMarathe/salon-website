<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'small_title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'phone' => 'nullable',
            'years_experience' => 'required|integer',
            'happy_customers' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        About::create($data);

        return redirect()->route('admin.about.index')->with('success', 'About section created!');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'small_title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'phone' => 'nullable',
            'years_experience' => 'required|integer',
            'happy_customers' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About section updated!');
    }

    public function destroy(About $about)
    {
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'About section deleted!');
    }
}
