<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produtos;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // inserindo informações no db
        $produtos = Produtos::create($request->all());

        if ($request->hasFile('img')) {
            $completeFilename = $request->file('img')->getClientOriginalName();
            // nome do arquivo
            $filename = pathinfo($completeFilename, PATHINFO_FILENAME);
            // extensao do arquivo
            $ext = $request->file('img')->getClientOriginalExtension();
            $finalFilename = 'surferzone_'.md5($filename).time().'.'.$ext;
            // upload da img
            $request->file('img')->storeAs('public/img/products', $finalFilename);
            // atualizando caminho da img
            $produtos->img = $finalFilename;
            $produtos->save();

            Alert::success('Show!', 'Um novo produto foi criado com sucesso!');

            return redirect(route('admin.products.show'));
        }
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


        if ($request->hasFile('img')) {
            // excluir img atual do storage
            Storage::delete($produto->img);

            $completeFilename = $request->file('img')->getClientOriginalName();
            // nome do arquivo
            $filename = pathinfo($completeFilename, PATHINFO_FILENAME);
            // extensao do arquivo
            $ext = $request->file('img')->getClientOriginalExtension();
            $finalFilename = 'surferzone_'.md5($filename).time().'.'.$ext;
            // upload da img
            $request->file('img')->storeAs('public/img/products', $finalFilename);
            // atualizando caminho da img
            $produto->img = $finalFilename;
            $produto->save();
        }

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
