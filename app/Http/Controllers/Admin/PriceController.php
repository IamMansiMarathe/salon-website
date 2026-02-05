<?php

namespace App\Http\Controllers\Admin;

use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function index() {
        $prices = Price::all();
        return view('admin.pricing.prices.index', compact('prices'));
    }

    public function create() {
        return view('admin.pricing.prices.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('prices', 'public');
        }

        Price::create($data);
        return redirect()->route('admin.prices.index')->with('success','Price added successfully');
    }

    public function edit(Price $price) {
        return view('admin.pricing.prices.edit', compact('price'));
    }

    public function update(Request $request, Price $price) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('prices', 'public');
        }

        $price->update($data);
        return redirect()->route('admin.prices.index')->with('success','Price updated successfully');
    }

    public function destroy(Price $price) {
        $price->delete();
        return redirect()->route('admin.prices.index')->with('success','Price deleted successfully');
    }
}
