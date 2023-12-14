<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('admin.aboutus', ['aboutUs' => $aboutUs]);
    }

    public function create()
    {
        return view('admin.aboutuscreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add validation for image
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
            AboutUs::create($data);
            return redirect()->route('admin.aboutus.index')->with('success', 'Post created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.aboutus.create')->withErrors(['error' => 'Failed to create post.']);
        }
    }

    public function edit(AboutUs $aboutUs)
    {
        return view('admin.aboutusedit', compact('aboutUs'));
    }

    public function update(Request $request, AboutUs $aboutUs)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $aboutUs->update($request->all());

        return redirect()->route('admin.aboutus.index');
    }

    public function destroy(AboutUs $aboutUs)
    {
        $aboutUs->delete();
        return redirect()->route('admin.aboutus.index')->with('success', 'Post deleted successfully.');
    }
}
