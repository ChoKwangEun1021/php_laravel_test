<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::orderby('title', 'asc')->get();
        return view('category.index')->with('categories', $categories);
    }
    public function view($id): View
    {
        $category = Category::find($id);
        return view('category.view')->with('category', $category);
    }
    // Request : $_POST, $_GET 모두 사용가능
    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->save();
        // 데이터베이스에 있는 내용을 가져오거나, 저장하거나, 삭제하거나, 수정하거나
        return redirect('/category');
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->save();
        // 데이터베이스에 있는 내용을 가져오거나, 저장하거나, 삭제하거나, 수정하거나
        return redirect('/category');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        // 데이터베이스에 있는 내용을 가져오거나, 저장하거나, 삭제하거나, 수정하거나
        return redirect('/category');
    }
}
