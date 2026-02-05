<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footer = Footer::first();
        return view('Admin.footer.index', compact('footer'));
    }

    public function edit() {
        $footer = Footer::first();
        return view('Admin.footer.edit', compact('footer'));
    }
    public function update(Request $request, Footer $footer) {
        $data = $request->validate([
            'description' => 'sometimes|string',
            'address' => 'sometimes|string',
            'contact' => 'sometimes|string',
            'email' => 'sometimes|email',
        ]);

        $footer->update($data);
        return redirect()->route('admin.footer.index')->with('success', 'Footer updated successfully');
    }
}
