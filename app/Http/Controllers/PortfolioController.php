<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio', ['portfolios' => $portfolios]);
    }


    public function create()
    {
        return view('admin.portfoliocreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->images->extension();
        $request->images->move(public_path('admin-assets'), $imageName);

        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'images' => $imageName,
        ]);

        return redirect()->route('admin.portfolio')->with('success', 'Portfolio item created successfully.');
    }
    public function update(Request $request, Portfolio $Portfolio)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $Portfolio->update($request->all());

    return redirect()->route('admin.portfolio');
}
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolioedit', compact('portfolio'));
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.portfolio')->with('success', 'Portfolio item deleted successfully.');
    }
}





