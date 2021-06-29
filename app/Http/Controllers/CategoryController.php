<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    function create(Request $req)
    {
        $req->validate([
            'name' => 'required|max:30'
        ]);

        $category = new Category();
        $category->name = $req->input('name');
        $category->save();

        $req->session()->flash('success', 'Category name '.$category->name.' created successfully');

        return redirect()->route('moderator.categories.create');
    }
    function all()
    {
        return category::all();
    }
    function delete($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('moderator.categories');

    }
    function edit(Request $req)
    {
        $category = Category::where('id', $req->input('id'))->first();
        $category->name = $req->input('name');
        $category->update();

        return redirect()->route('moderator.categories');
    }
    function searchJSON($keyword)
    {
        $category = Category::query()->whereLike('name', $keyword);
        return json_encode($category);
    }
}
