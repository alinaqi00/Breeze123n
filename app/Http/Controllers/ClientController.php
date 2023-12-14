<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::all();
        return view('admin.client', ['clients' => $client]);
    }

    public function create()
    {
        return view('admin.clientcreate');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add validation for image
    ]);

    // Handle image upload
    $data = $request->except('_token');
    if ($request->hasFile('image')) {
      $imageName = time() . '.' . $request->image->extension();
        $imagePath=$request->image->storeAs('images', $imageName);
        $data['image'] = $imagePath;
    }

    try {
        Client::create($data);
        return redirect()->route('admin.client')->with('success', 'client created successfully.');
    } catch (\Exception $e) {
        return redirect()->route('admin.client.create')->withErrors(['error' => 'Failed to create client.']);
    }
}

    

    public function edit(Client $client)
{
    return view('admin.clientedit', compact('client'));
}

public function update(Request $request, Client $client)
{
    $request->validate([
        'name' => 'required',
    ]);

    $client->update($request->all());

    return redirect()->route('admin.client');
}

public function destroy(Client $client)
{
    $client->delete();
    return redirect()->route('admin.client')->with('success', 'client person deleted successfully.');
}
}
