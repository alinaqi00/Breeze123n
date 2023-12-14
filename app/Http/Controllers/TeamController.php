<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team = team::all();
        return view('admin.team', ['teams' => $team]);
    }

    public function create()
    {
        return view('admin.teamcreate');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'role' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add validation for image
    ]);

    // Handle image upload
    $data = $request->except('_token');
    if ($request->hasFile('image')) {
      $imageName = time() . '.' . $request->image->extension();
        $imagePath=$request->image->storeAs( $imageName);
        $data['image'] = $imagePath;
    }

    try {
        team::create($data);
        return redirect()->route('admin.team')->with('success', 'team created successfully.');
    } catch (\Exception $e) {
        return redirect()->route('admin.team.create')->withErrors(['error' => 'Failed to create team.']);
    }
}

    

    public function edit(team $team)
{
    return view('admin.teamedit', compact('team'));
}

public function update(Request $request, team $team)
{
    $request->validate([
        'name' => 'required',
        'role' => 'required',
    ]);

    $team->update($request->all());

    return redirect()->route('admin.team');
}

public function destroy(team $team)
{
    $team->delete();
    return redirect()->route('admin.team')->with('success', 'team person deleted successfully.');
}
}
