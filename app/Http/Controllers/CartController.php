<?php
// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Session;



class CartController extends Controller
{
   
    public function index()
    {
        $cart = Session::get('cart', []);

        return view('Frontend.cart', compact('cart'));
    }
    

  
    public function add(Product $product)
{
    $cart = Session::get('cart', []);

    // Check if the product is already in the cart
    if (isset($cart[$product->id])) {
        $cart[$product->id]['quantity']++;
    } else {
        $cart[$product->id] = [
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
        ];
    }
dd($cart[$product->id]);
    Session::put('cart', $cart);

    return redirect()->route('Frontend.cart')->with('success', 'Product added to cart.');
}

    public function checkout()
    {
        // Implement the checkout logic here, integrating Laravel Cashier
        // For example, create an order and charge the user
        // Use Laravel Cashier documentation for implementation details

        Session::forget('cart');

        return redirect()->route('cart.index')->with('success', 'Checkout successful.');
    }
}
