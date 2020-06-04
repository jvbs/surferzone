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
            'products' => Produtos::orderBy('created_at', 'desc')->get(),
            'categories' => Category::orderBy('name')->get(),
            'brands' => Brands::orderBy('name')->get(),
        ];

        return view('products')->with('data', $data);
    }

    public function searchByCategory(Category $category){
        $data = [
            'products' => $category->produtos()->paginate(15),
            'categories' => Category::orderBy('name')->get(),
            'brands' => Brands::orderBy('name')->get(),
            'currentCategory' => $category
        ];

        return view('products')->with('data', $data);
    }

    public function searchByBrand(Brands $brand){
        $data = [
            'products' => $brand->produtos()->paginate(15),
            'categories' => Category::orderBy('name')->get(),
            'brands' => Brands::orderBy('name')->get(),
            'currentBrand' => $brand
        ];

        return view('products')->with('data', $data);
    }

    public function viewProduct(Produtos $product){
        return view('detail')->with('data', $product);
    }
}
