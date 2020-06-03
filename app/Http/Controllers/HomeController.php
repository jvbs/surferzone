<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produtos;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(){
        $data = [
            'produtos' => Produtos::all()
        ];

        return view('products')->with('data', $data);
    }
}
