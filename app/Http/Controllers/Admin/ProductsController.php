<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produtos;
use App\Brands;
use App\Category;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        $data = [
            'brands' => Brands::all(),
            'categories' => Category::all(),
        ];
        return view('admin.products.create')->with('data', $data);
    }


    public function store(Request $request)
    {
        // tratando campos com mascara
        $request->merge([
            'price' => str_replace(',', '.', str_replace('.', '', $request['price'])),
            'discount' => str_replace('%', '', $request['discount']),
        ]);

        $request->validate([
            'name' => 'required|between:5,50',
            'price' => 'required|numeric',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'discount' => 'required|between:1,100',
            'size_id'=> 'required|integer',
            'brand_id'=> 'required|integer',
            'color_id'=> 'required|integer',
            'category_id'=> 'required|integer',
            'stock'=> 'required|integer|between:1,999'
        ]);

        // inserindo informações no db
        $produtos = Produtos::create($request->all());

        if ($request->hasFile('img')){
            $completeFilename = $request->file('img')->getClientOriginalName();
            // nome do arquivo
            $filename = pathinfo($completeFilename, PATHINFO_FILENAME);
            // extensao do arquivo
            $ext = $request->file('img')->getClientOriginalExtension();
            $finalFilename = 'surferzone_'.md5($filename).time().'.'.$ext;
            // upload da img
            $imagePath = $request['img']->storeAs('img/products', $finalFilename, 'public');
            // redimensionando a imagem
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 550);
            $image->save();
            // atualizando caminho da img
            $produto->img = $finalFilename;
            $produto->save();

            Alert::success('Show!', 'Um novo produto foi criado com sucesso!');

            return redirect(route('admin.products.show'));
        }
    }


    public function show()
    {
        return view('admin.products.show', [
            'data' => Produtos::all()
        ]);
    }


    public function edit(Produtos $produto)
    {
        $data = [
            'product' => $produto,
            'brands' => Brands::all(),
            'categories' => Category::all(),
        ];

        return view('admin.products.edit')->with('data', $data);
    }


    public function update(Request $request, Produtos $produto)
    {

        // tratando campos com mascara
        $request->merge([
            'price' => str_replace(',', '.', str_replace('.', '', $request['price'])),
            'discount' => str_replace('%', '', $request['discount']),
        ]);

        $request->validate([
            'name' => 'required|between:5,50',
            'price' => 'required|numeric',
            'description' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'discount' => 'required|between:1,100',
            'size_id'=> 'required|integer',
            'brand_id'=> 'required|integer',
            'color_id'=> 'required|integer',
            'category_id'=> 'required|integer',
            'stock'=> 'required|integer|between:1,999'
        ]);

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
            $imagePath = $request['img']->storeAs('img/products', $finalFilename, 'public');
            // redimensionando a imagem
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 550);
            $image->save();
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
