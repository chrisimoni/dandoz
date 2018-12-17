<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;
use Purifier;
use Image;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('category', 'id')->all();
        return view('backend.posts.addPost', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:6|unique:posts',
            'description' => 'required|min:6',
            'category_id' => 'required|min:1',
            'post_content' => 'required|min:6',
            'featured_image' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->post_content;
        $post->slug = str_slug($request->title, '-');
        $post->category_id = $request->category_id;
        $post->user_id = $request->user()->id;

        //save image
        if($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/featured_images/' . $filename);
            
           // Image::make($image)->save($location);

            $image->move(public_path('images/featured_images'), $filename);

            $post->path = $filename;
        }

        $post->save();

        return back()->with('success','Post Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       //
    }

    public function displayPost($slug) {
        $post = Post::where('slug', $slug)->first();
        
        if(empty($post)) {
            //redirect to 404 page
            return redirect()->route('notfound');
        }      

        return view('post-details', compact('post'));
    }

    public function displayAllPosts() {

        $posts = Post::orderBy('id', 'desc')->get(); 

        return view('backend.posts.viewAllPosts', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::pluck('category', 'id')->all();

        return view('backend.posts.edit', compact('post', 'categories'));
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
            'title' => 'required|min:6',
            'description' => 'required|min:6',
            'category_id' => 'required|min:1',
            'content' => 'required|min:6',
            'featured_image' => 'image|mimes:jpeg,jpg,png'
        ]);
        
        $post = Post::findOrFail($id);

        $check = Post::where('title', $request->title)->where('id', '!=', $id)->first();

        if($check) {
            return back()->with('failed','This Post title is already taken!');
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->slug = str_slug($request->title, '-');
        $post->category_id = $request->category_id;
        $post->user_id = $request->user()->id;        

        //remove and/or save image
        if($request->hasFile('featured_image')) {
            
            if($post->path){
                if(File::exists(public_path('images/featured_images/'. $post->path))){
                    unlink(public_path() . "/images/featured_images/" . $post->path);
                }
            }

            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/featured_images/' . $filename);

            $image->move(public_path('images/featured_images'), $filename);

            $post->path = $filename;
        }

        $post->update();

        return back()->with('success','Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        //deleting featured image
        if($post->path){
            if(File::exists(public_path('images/featured_images/'. $post->path))){
                unlink(public_path() . "/images/featured_images/" . $post->path);
            }
        }

        $post->delete();

        return back()->with('success', 'Post deleted!');
    }

}
