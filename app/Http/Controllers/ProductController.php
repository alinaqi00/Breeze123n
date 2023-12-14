<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'manufacturer' => 'nullable',
            'supplier' => 'nullable',
            'material' => 'nullable',
            'minimum_order_quantity' => 'nullable|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add validation for image
        ]);

        $data = $request->except('_token');

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $imagePath = $request->image->storeAs('images', $imageName);
            $data['image'] = $imagePath;
            
        }

        try {
            Product::create($data);
            return redirect()->route('admin.product')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.productcreate')->withErrors(['error' => 'Failed to create product.']);
        }
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.productedit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'manufacturer' => 'nullable',
            'supplier' => 'nullable',
            'material' => 'nullable',
            'minimum_order_quantity' => 'nullable|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add validation for image
        ]);

        $data = $request->except('_token');

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $imagePath = $request->image->storeAs('images', $imageName);
            $data['image'] = $imagePath;
        }

        $product->update($data);

        return redirect()->route('admin.product')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product')->with('success', 'Product deleted successfully.');
    }
}
