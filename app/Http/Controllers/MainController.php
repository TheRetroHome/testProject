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
       $blog = BlogPost::create([
          'title'=>$request->input('title'),
           'content'=>$request->input('content'),
       ]);
       $request->session()->flash('status','Blog post was created!');
       return redirect()->route('posts.show',['post'=>$blog->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $request->session()->reflash();
        return view('posts.show',['post'=>BlogPost::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
