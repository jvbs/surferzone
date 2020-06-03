<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|between:1,50|unique:categories',
        ], [], [
            'name' => '"Nome da Categoria"'
        ]);

        // inserindo informações no db
        Category::create($request->all());

        Alert::success('Show!', 'Uma nova categoria foi criada com sucesso!');

        return redirect(route('admin.categories.show'));
    }

    public function show()
    {
        return view('admin.categories.show', [
            'data' => Category::all()
        ]);
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit')->with('category', $category);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|between:1,50|unique:categories',
        ], [], [
            'name' => '"Nome da Categoria"'
        ]);

        // inserindo informações no db
        $category->update($request->all());

        Alert::success('Show!', 'A categoria foi alterada com sucesso!');

        return redirect(route('admin.categories.show'));
    }

    public function destroy(Category $category)
    {
        if($category->delete()){
            Alert::success('Show!', 'Categoria excluída com sucesso!');

            return redirect(route('admin.categories.show'));
        }
    }
}
