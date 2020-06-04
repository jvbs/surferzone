<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Produtos $product)
    {
        $user = auth()->user();
        $cart = Cart::updateOrCreate(['user_id' => $user->id]);

        $cart->products()->saveMany([$product]);

        return view('cart')->with('products', $cart->products);
    }


    public function show()
    {
        // current user id
        $user = auth()->user();

        if(!$user->cart){
            $cart = Cart::updateOrCreate(['user_id' => $user->id]);
        } else {
            $cart = $user->cart;
        }

        return view('cart')->with('products', $cart->products);
    }


    public function edit(Cart $cart)
    {
        //
    }


    public function update(Request $request, Cart $cart)
    {
        //
    }


    public function destroy(Produtos $product)
    {
        $user = auth()->user();
        $cart = $user->cart;

        DB::table('cart_produtos')->where([
            ['cart_id', $cart->id],
            ['produtos_id',$product->id]
        ])->delete();

        return view('cart')->with('products', $cart->products);
    }
}
