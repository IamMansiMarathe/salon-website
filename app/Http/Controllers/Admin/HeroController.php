<?php

namespace App\Http\Controllers\Admin;
use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
       $hero = Hero::first(); // Single hero
        return view('admin.hero.index', compact('hero'));
    }

    public function edit(Hero $hero)
    {
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'small_title' => 'required|string',
            'main_title' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'image_1' => 'image|mimes:jpg,png,jpeg,gif,webp|max:2048',
            'image_2' => 'image|mimes:jpg,png,jpeg,gif,webp|max:2048',
            'image_3' => 'image|mimes:jpg,png,jpeg,gif,webp|max:2048',
        ]);

        $data = $request->only('small_title', 'main_title', 'phone', 'email');

        // Handle image uploads
        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile("image_$i")) {
                if ($hero["image_$i"]) {
                    Storage::disk('public')->delete($hero["image_$i"]);

                }
                $data["image_$i"] = $request->file("image_$i")->store('heroes', 'public');
            }
        }

        $hero->update($data);

        return redirect()->route('admin.hero.index')->with('success', 'Hero section updated!');
    }
}
