<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Orders;
use App\Produtos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Produtos $products)
    {
        $user = auth()->user();
        $cart = $user->cart;

        // check if users got any product in his cart
        if(count($cart->products) > 0){
            $order = Orders::updateOrCreate([
                'user_id' => $user->id,
                'cart_id' => $cart->id,
                'total' => $request->total
            ]);

            // $cart->products->delete();

            // $cart->products()->saveMany([$products]);

            return redirect(route('admin.orders.show'));
        }
    }


    public function show()
    {
        if(auth()->user()->isAdmin()){
            $orders = Orders::orderBy('created_at', 'desc')->get();
        } else {
            $orders = DB::table('orders')->where([
                'user_id' => auth()->user()->id,
            ])->get();
        }

        return view('admin.orders.show')->with('orders', $orders);
    }

}
