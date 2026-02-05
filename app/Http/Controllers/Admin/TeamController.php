<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->get();
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image|max:2048',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
        ]);

        $data['image'] = $request->file('image')->store('teams', 'public');

        Team::create($data);

        return redirect()->route('admin.teams.index')->with('success','Member added');
    }

    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'nullable|image|max:2048',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($team->image);
            $data['image'] = $request->file('image')->store('teams','public');
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success','Updated');
    }

    public function destroy(Team $team)
    {
        Storage::disk('public')->delete($team->image);
        $team->delete();

        return back()->with('success','Deleted');
    }
}

