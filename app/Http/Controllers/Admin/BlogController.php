<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{ 
    public function index() {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create() {
        return view('admin.blogs.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'date' => 'nullable|date',
            'category' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        Blog::create($data);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully');
    }

    public function edit(Blog $blog) {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog) {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'date' => 'nullable|date',
            'category' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($data);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog) {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully');
    }
}
    