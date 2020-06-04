<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        dd('teste');
    }


    public function show()
    {
        return view('admin.orders.show');
    }


    public function edit(Orders $orders)
    {
        //
    }


    public function update(Request $request, Orders $orders)
    {
        //
    }


    public function destroy(Orders $orders)
    {
        //
    }
}
