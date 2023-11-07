<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create_category()
    {
        return view('admin.category.create');
    }

    public function store_category(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->desc = $request->input('desc');
        $category->save();

        return redirect()->back()->with('success', 'Category successfully created');
    }

    public function list_categories()
    {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }
    public function edit_category($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update_category(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->desc = $request->input('desc');
        $category->save();

        return redirect()->route('list.categories')->with('success', 'Category successfully updated');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('list.categories')->with('success', 'Category successfully deleted');
    }

}
