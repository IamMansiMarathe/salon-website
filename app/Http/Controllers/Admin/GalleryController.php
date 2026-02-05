<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $data['image'] = $request->file('image')->store('gallery', 'public');

        Gallery::create($data);

        return redirect()->route('admin.gallery.index')->with('success','Image added');
    }

    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();

        return back()->with('success','Image deleted');
    }
}
