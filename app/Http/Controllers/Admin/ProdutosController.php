<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {
        $products = Produtos::create($request->all());
        // $products = $request->all();

        return redirect(route('admin.products.show'));

    }


    public function show(Produtos $produtos)
    {
        return view('admin.products.show', [
            'data' => Produtos::all(),
        ]);
    }


    public function edit(Produtos $id_produto)
    {
        return view('admin.products.edit')->with('product', $id_produto);
    }


    public function update(Request $request, Produtos $produtos)
    {
        //
    }


    public function destroy(Produtos $produtos)
    {
        //
    }
}
