<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //show all products
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    //show create product form
    public function create(){
        return view('products.create');
    }

    //store product
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer',
            'price' => 'required|decimal:2',

        ]);

        // Save the product to the database
        Product::create([
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
        ]);
        return redirect()->route('products')->with('success', 'Product created successfully.');
    }

}
