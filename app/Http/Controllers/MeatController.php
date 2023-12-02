<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MeatController extends Controller
{
    public function index()
    {
        $meats = Product::all();
        return view('products', compact('meats'));
    }

    public function meatCart()
    {
        return view('cart');
    }
    public function addMeattoCart($id)
    {
        $meat = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        // Get the price of the product from the database.
        $price = $meat->price;

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['price'] = $price * $cart[$id]['quantity'];
        } else {
            $cart[$id] = [
                "name" => $meat->name,
                "quantity" => 1,
                "price" => $price * 1,
                "image" => $meat->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'your frash Meat has been added to cart!');
    }


    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'fresh meat added to cart.');
        }
    }

    public function deleteMeat(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Book successfully deleted.');
        }
    }
}
