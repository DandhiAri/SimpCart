<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {

        $user = auth()->user();
        $carts = Cart::where('name', $user->name)->get();
        return view('home.cartpage', compact('carts'), [
            'title' => "cart",
            'active' => 'cart'
        ]);
    }
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {

            $user = auth()->user();
            $product = Product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->address = $user->address;
            $cart->product_name = $product->name;
            $cart->price = $product->harga;
            $cart->quantity = $request->quantity;
            $cart->save();


            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }
    public function deletecart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back();
    }
    public function confirm(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $address = $user->address;
        foreach ($request->product_name as $key => $order) {
            $order = new Transec;
            $order->product_name = $request->product_name[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];
            $order->name = $name;
            $order->address = $address;
            $order->status = "not delivered";
            $order->save();
        }
        Cart::where('name', $name)->delete();
        return redirect()->back();
    }
}
