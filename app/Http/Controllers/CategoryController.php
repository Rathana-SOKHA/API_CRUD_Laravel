<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // Raw SQL
        // $categories = DB::select("SELECT * FROM categories");

        // Query Builder
        // $categories = DB::table('categories')->get();

        // Eloquent ORM 
        $categories = Category::all();

        // dd($categories);
        return view('categories.list', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        Category::create([
            'name' => request()->name,
            'desc' => request()->desc
        ]);

        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => request()->name,
            'desc' => request()->desc
        ]);

        return redirect('/categories');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
}
