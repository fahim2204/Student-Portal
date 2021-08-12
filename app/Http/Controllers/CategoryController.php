<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    function apiGetAll()
    {
        $categories = category::with('posts')->get()->sortByDesc(function ($item) {
            return count($item->posts);
        });
        return response()->json($categories, 200);
    }
    function create(Request $req)
    {
        $req->validate([
            'name' => 'required|max:30'
        ]);

        $category = new Category();
        $category->name = $req->input('name');
        $category->save();

        $req->session()->flash('success', 'Category name '.$category->name.' created successfully');

        return back();
    }
    function apiCreate(Request $req)
    {
        $req->validate([
            'name' => 'required|max:30'
        ]);

        $category = new Category();
        $category->name = $req->input('name');
        $category->save();

        return response()->json($category, 201);
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
    function apiEdit(Request $req)
    {
        $category = Category::where('id', $req->input('id'))->first();
        $category->name = $req->input('name');
        $category->update();

        return response()->json($category, 200);
    }
    function searchJSON($keyword)
    {
        $category = Category::query()->whereLike('name', $keyword);
        return json_encode($category);
    }
}
