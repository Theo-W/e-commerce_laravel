<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'categorires' => Category::all(),
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        Category::create([
            'name' => $request->get('name'),
        ]);

        return redirect()->route('admin.category.index');
    }

    public function edit(int $id)
    {
        $category = Category::find($id)->first();

        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    public function update(int $id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        Category::find($id)->update([
           'name' => $request->get('name')
        ]);

        return redirect()->route('admin.category.index');
    }

    public function delete(int $id)
    {

        $category = Category::find($id)->first();
        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
