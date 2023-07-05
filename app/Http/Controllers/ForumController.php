<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Post;

class ForumController extends Controller
{
    public function index(): View
    {
        return view('forum.index');
    }
    public function view(): View
    {
        return view('forum.view');
    }
    public function create(): View
    {
        $categories = Category::orderby('title', 'asc')->get();
        return view('forum.create')->with('categories', $categories);
    }
    // AJax 통신하는 방식임
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->save();
        // 가져왔던 데이터를 다시 보내주기
        $result = $request->all();
        $data = array('result' => $result);
        return response()->json($data);
    }
}
