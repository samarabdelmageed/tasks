<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $columns = ['postTitle','author','description','published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $post = new Post();
        // $post->postTitle = $request->title;
        // $post->author = $request->author;
        // $post->description = $request->description;
        // if(isset($request->published)){
        //     $post->published = 1;
        // }else{
        //     $post->published = 0;
        // }
        // $post->save();
        // $data = $request->only($this->columns);
        $data = $request->validate([
            'postTitle'=>'required|string|max:50',
            'author'=>'required|string',
            'description'=>'required|string|min:10',
        ]);
        $data['published'] = isset($request->published);
        Post::create($data);
        return redirect ('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('showPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('updatePost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = $request->only($this->columns);
        $data = $request->validate([
            'postTitle'=>'required|string|max:50',
            'author'=>'required|string',
            'description'=>'required|string|min:10',
        ]);
        $data['published'] = isset($request->published);
        Post::where('id',$id)->update($data);
        return redirect ('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id',$id)->delete();
        return redirect('posts');
    }

    /**
     * Trashed List
     */
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('trashed',compact('posts'));
    }
    
    /**
     * Force Delete
     */
    public function forceDelete(string $id)
    {
        Post::where('id',$id)->forceDelete();
        return redirect ('posts');
    }

    /**
     * Restore
     */
    public function restore(string $id)
    {
        Post::where('id',$id)->restore();
        return redirect('posts');
    }
}
