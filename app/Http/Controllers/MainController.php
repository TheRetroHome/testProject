<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Requests\PostRequest;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index',['posts'=>BlogPost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();
       $blog = BlogPost::create($data);
       $request->session()->flash('status','Blog post was created!');
       return redirect()->route('posts.show',['post'=>$blog->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        return view('posts.show',['post'=>BlogPost::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit',['post'=>BlogPost::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, BlogPost $post)
    {
        $data = $request->validated();
        $post->update($data);
        $request->session()->flash('status','Blog post was updated');
        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $post)
    {
        $post->delete();
        session()->flash('status','Blog post was delete');
        return redirect()->route('posts.index');
    }
}
