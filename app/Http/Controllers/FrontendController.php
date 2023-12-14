<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Frontend;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Post;
use App\Models\Product;

use App\Models\Team;

use App\Models\Portfolio;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $team = Team::all();
        $aboutUsData = AboutUs::all();
        $services = Services::all();
        $portfolios = Portfolio::select('title', 'images')->take(4)->get();


        return view('Frontend.home', compact('posts', 'aboutUsData','portfolios', 'services','team'));
    }

    public function aboutUs()
    {
        $aboutUsData = AboutUs::all();

        return view('Frontend.aboutus', compact('aboutUsData'));
    }
    public function product()
    {
        $products = Product::select('description','price', 'image')->paginate(9);

        return view('Frontend.product', compact('products'));
    }


    public function services()
    {
        $services = Services::all();
        return view('Frontend.services', compact('services'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::select('title', 'images', 'description')->paginate(9);
        return view('frontend.portfolio', compact('portfolios'));
    }
    public function blog()
    {
        $posts = Post::all();
        return view('Frontend.blog', compact('posts'));
    }
    

public function show(Post $post)
{
    // Assuming your model is named 'Post'
    return view('Frontend.blogdetail', compact('post'));
}

    public function team()
    {
        $team = Team::all();
        return view('Frontend.team', compact('team'));
    
    // Other methods...

}
}