<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('admin.services', ['services' => $services]);
    }

    public function create()
    {
        return view('admin.servicecreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'title' => 'required',
        ]);

        $data = $request->except('_token');
    if ($request->hasFile('image')) {
      //  $imagePath = $request->file('image')->store('post_images','public');
      $imageName = time() . '.' . $request->image->extension();

        // Move the uploaded file to the storage path
        $imagePath=$request->image->storeAs( $imageName);
        $data['image'] = $imagePath;
       // dd($imagePath);
    }

        try {
            Services::create($data);
            return redirect()->route('admin.services')->with('success', 'Post created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.services')->withErrors(['error' => 'Failed to create post.']);
        }
    }

    public function edit(Services $services)
    {
        return view('admin.servicesedit', compact('services'));
    }

    public function update(Request $request, Services $services)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $services->update($request->all());

        return redirect()->route('admin.services');
    }

    public function destroy(Services $services)
    {
        $services->delete();
        return redirect()->route('admin.services')->with('success', 'Post deleted successfully.');
    }
}
