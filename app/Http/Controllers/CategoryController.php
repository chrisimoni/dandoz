<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('category', '!=' , 'Uncategorized')->get();

        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|min:2|unique:categories'
        ]);

        $cat = new Category;
        $cat->category = $request->category;
        $cat->slug = str_slug($request->category, '-');
        $cat->save();

        return back()->with('success', 'Category Added!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::find($id);
        
        if(!$cat) {
            return redirect()->route('notfound');
        }

        return view('backend.category.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required|min:2',
        ]);
  
        $cat = Category::findOrFail($id);

        $check = Category::where('category', $request->category)->where('id', '!=', $id)->first();
        if($check) {
            return back()->with('failed','This category name is already taken!');
        }

        $cat->category = $request->category;
        $cat->slug = str_slug($request->category, '-');
        $cat->update();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);

        $posts = Post::where('category_id', $id)->get();
        if (count($posts) > 0){
            $uncat = Category::where('category', 'Uncategorized')->first();

            Post::where('category_id', $cat->id)->update(['category_id' => $uncat->id]);
        }

        $cat->delete();

        return back();
    }

    //get category posts
    public function getCategoryPosts($slug) {

        $cat = Category::where('slug', $slug)->first();
        
        if(!$cat) {
            return redirect()->route('notfound');
        }

        //check if category's post is more than one
        $check = Post::where('category_id', $cat->id)->get();
        
        if(count($check) > 1) {
            $featured_post = Post::where('category_id', $cat->id)->latest()->first();
            $posts = Post::orderBy('id', 'desc')->where('category_id', $cat->id)->where('id', '!=', $featured_post->id)->get();
        }else {
            $featured_post = Post::where('category_id', $cat->id)->first();
            $posts = [];
        }

        return view('category', compact('posts', 'cat', 'featured_post'));
    }

    public function getCats() {
        $allCats = Category::all();

        //return view('inc.header')->withModel($allCats);
        return 'Hello';
    }
}
