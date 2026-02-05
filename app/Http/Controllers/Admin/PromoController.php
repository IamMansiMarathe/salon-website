<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromoController extends Controller
{
    public function index() {
        $promos = Promo::all();
        return view('admin.pricing.promos.index', compact('promos'));
    }

    public function create() {
        return view('admin.pricing.promos.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'small_heading' => 'nullable|string|max:255',
            'big_number' => 'nullable|string|max:255',
            'unit' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
        ]);

        Promo::create($data);
        return redirect()->route('admin.promos.index')->with('success','Promo added successfully');
    }

    public function edit(Promo $promo) {
        return view('admin.pricing.promos.edit', compact('promo'));
    }

    public function update(Request $request, Promo $promo) {
        $data = $request->validate([
            'small_heading' => 'nullable|string|max:255',
            'big_number' => 'nullable|string|max:255',
            'unit' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
        ]);

        $promo->update($data);
        return redirect()->route('admin.promos.index')->with('success','Promo updated successfully');
    }

    public function destroy(Promo $promo) {
        $promo->delete();
        return redirect()->route('admin.promos.index')->with('success','Promo deleted successfully');
    }
}
