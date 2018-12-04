<?php

namespace App\Http\Controllers\Myadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Session;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('myadmin.posts.showposts')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); 
        return view('myadmin.posts.addpost')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'       => 'required|max:255|min:5',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body'        => 'required',
            'image'       => 'required|image| max:2000',
            'meta_desc'   => 'max:260'
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body  = $request->body;
        $post->meta_desc  = $request->meta_desc;
        $post->meta_keywords  = $request->meta_keywords;

        if (!empty($request->meta_og_type)) {
           $post->meta_keywords  = $request->meta_og_type;
        }
         
         if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/posts/');
            $image->move($location, $filename);
            $post->featured_image = $filename;
         }

        $post->save();
        
        Session::flash('adsuccess','The Post Have Saved Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('myadmin.posts.editpost')->withPost($post)->withCategories($categories);
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
         $post = Post::find($id);
        if($request->input('slug')==$post->slug){
            $this->validate($request,array(
            'title'       => 'required|max:255|min:5',
            'category_id' => 'required|integer',
            'body'        => 'required',
            'image'       => 'sometimes|image| max:2000',
            'meta_desc'   => 'max:260'
            ));
        }else{
          $this->validate($request,array(
            'title'       => 'required|max:255|min:5',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body'        => 'required',
            'image'       => 'sometimes|image| max:2000',
            'meta_desc'   => 'max:260'
            ));
        }
        
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        $post->meta_desc  = $request->meta_desc;
        $post->meta_keywords  = $request->meta_keywords;

        if (!empty($request->meta_og_type)) {
           $post->meta_og_type  = $request->meta_og_type;
        }

        if($request->hasFile('image')){
             $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/posts/');
            $image->move($location, $filename);
            $post->featured_image = $filename;
         }

        $post->save();

     

        Session::flash('adsuccess','Post Updated Successfully.....');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
