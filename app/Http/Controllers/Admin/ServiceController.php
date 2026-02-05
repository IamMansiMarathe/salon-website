<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
     public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success','Service added');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $request->file('icon')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success','Service updated');
    }

    public function destroy(Service $service)
    {
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }
        $service->delete();

        return back()->with('success','Service deleted');
    }
}
