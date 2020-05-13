<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produtos;
use Alert;
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
        Produtos::create($request->all());
        // $products = $request->all();
        Alert::success('Show!', 'Um novo produto foi criado com sucesso!');

        return redirect(route('admin.products.show'));

    }


    public function show()
    {
        return view('admin.products.show', [
            'data' => Produtos::all(),
        ]);
    }


    public function edit(Produtos $produto)
    {
        return view('admin.products.edit')->with('product', $produto);
    }


    public function update(Request $request, Produtos $produto)
    {
        $produto->update($request->all());

        Alert::success('Show!', 'Alterações realizadas com sucesso!');

        return redirect(route('admin.products.show'));
    }


    public function destroy(Produtos $produto)
    {
        if($produto->delete()){
            Alert::success('Show!', 'Produto excluído com sucesso!');

            return redirect(route('admin.products.show'));
        }
    }
}
