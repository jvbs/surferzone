<?php

namespace App\Http\Controllers\Admin;

use App\Brands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class BrandsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|between:1,50|unique:brands',
        ], [], [
            'name' => '"Nome da Marca"'
        ]);

        // inserindo informações no db
        Brands::create($request->all());

        Alert::success('Show!', 'Uma nova marca foi criada com sucesso!');

        return redirect(route('admin.brands.show'));
    }


    public function show()
    {
        return view('admin.brands.show', [
            'data' => Brands::all()
        ]);
    }


    public function edit(Brands $brands)
    {
        return view('admin.brands.edit')->with('brands', $brands);
    }


    public function update(Request $request, Brands $brands)
    {
        $request->validate([
            'name' => 'required|between:1,50|unique:brands',
        ], [], [
            'name' => '"Nome da Marca"'
        ]);

        // inserindo informações no db
        $brands->update($request->all());

        Alert::success('Show!', 'A marca foi alterada com sucesso!');

        return redirect(route('admin.brands.show'));
    }


    public function destroy(Brands $brands)
    {
        if($brands->delete()){
            Alert::success('Show!', 'Marca excluída com sucesso!');

            return redirect(route('admin.brands.show'));
        }
    }
}
