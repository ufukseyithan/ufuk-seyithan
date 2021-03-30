<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts', [
            'posts' => Post::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-post');
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
            'title' => 'required',
            'image' => 'required|image',
            'content' => 'required'
        ]);

        $imagePath = $request->file('image')->store('post-images', 'public');

        $request->user()->posts()->create([
            'title' => $request->title,
            'image_path' => $imagePath,
            'content' => $request->content,
            'description' => $request->description,
            'keywords' => $request->keywords
        ]);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.edit-post', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image',
            'content' => 'required'
        ]);

        $post->title = $request->title;

        if ($request->hasFile('image'))
        {
            Storage::delete('public/'.$post->image_path);
        
            $post->image_path = $request->file('image')->store('post-images', 'public');
        }

        $post->content = $request->content;
        $post->description = $request->description;
        $post->keywords = $request->keywords;

        $post->save();

        return back();
    }

    public function updateStatus(Request $request, Post $post)
    {
        $post->timestamps = false;
        $post->status = $request->has('status') ? 1 : 0;

        $post->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete('public/'.$post->image_path);
        
        $post->delete();

        return back();
    }
}
