<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produtos;
use App\Category;
use App\Brands;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(){
        $data = [
            'products' => Produtos::all(),
            'categories' => Category::all(),
            'brands' => Brands::all(),
        ];

        return view('products')->with('data', $data);
    }
}
