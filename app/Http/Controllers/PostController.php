<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function post()
    {
        $posts = Post::all();
        return view('admin.post', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.postcreate');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
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
        Post::create($data);
        return redirect()->route('admin.post')->with('success', 'Post created successfully.');
    } catch (\Exception $e) {
        return redirect()->route('admin.post.create')->withErrors(['error' => 'Failed to create post.']);
    }
}

    

    public function edit(Post $post)
{
    return view('admin.postedit', compact('post'));
}

public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $post->update($request->all());

    return redirect()->route('admin.post');
}

public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('admin.post')->with('success', 'Post deleted successfully.');
}

}
