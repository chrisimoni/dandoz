<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('category', 'news')->first();
        $posts = Post::where('category_id', '!=', $category->id)->take(8)->orderBy('id', 'desc')->get();
        return view('homepage', compact('posts'));
    }

}
