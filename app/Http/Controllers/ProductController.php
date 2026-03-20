<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Admin: show all products
    public function adminIndex()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    // Admin: search products
    public function adminSearch(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->get();
        return view('product', compact('products'));
    }

    // User: show all products
    public function userIndex()
    {
        $products = Product::all();
        return view('productsView', compact('products'));
    }

    // User: search products
    public function userSearch(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->get();
        return view('productsView', compact('products'));
    }
}
