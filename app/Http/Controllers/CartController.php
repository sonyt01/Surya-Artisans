<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;


class CartController extends Controller {

    // Add to cart already exists
   public function add(Request $request) {
    $cart = Session::get('cart', []);

    $productId = $request->id;
    $found = false;

    // Check if product already exists
    foreach($cart as &$item) {
        if($item['id'] == $productId) {
            $item['quantity'] = ($item['quantity'] ?? 1) + 1; // increase quantity
            $found = true;
            break;
        }
    }

    // If not found, add new
    if(!$found) {
        $cart[] = [
            'id' => $productId,
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
            'quantity' => 1
        ];
    }

    Session::put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart!');
}

    public function view() {
        $cart = Session::get('cart', []);
        return view('cart', compact('cart'));
    }

    // Update quantity
    public function update(Request $request, $index) {
        $cart = Session::get('cart', []);
        if(isset($cart[$index])) {
            $cart[$index]['quantity'] = max(1, intval($request->quantity));
            Session::put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Cart updated!');
    }

    public function index()
{
    if (Auth::check()) {
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('cart', compact('cart'));
    } else {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }
}
    // Remove item from cart
    public function remove($index)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$index])) {
        unset($cart[$index]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Item removed from cart');
}

    // Checkout page (optional)
    public function checkout() {
        $cart = Session::get('cart', []);
        return view('checkout', compact('cart'));
    }


}
