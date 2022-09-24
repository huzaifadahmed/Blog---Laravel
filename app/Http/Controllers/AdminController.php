<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            "posts"=>Post::all()->where('user_id','=',auth()->user()->id)
        ]);
    }

    public function create()
    {
        return view('newpost',[
            "categories"=>Category::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'slug'=>'required|unique:posts',
            'category_id'=>'required',
            'body'=>'required',

        ]);

        Post::create([
            'user_id'=>auth()->id(),
            'title'=>$attributes['title'],
            'slug'=>$attributes['slug'],
            'excerpt'=>$attributes['excerpt'],
            'body'=>$attributes['body'],
            'category_id'=>$attributes['category_id'],

        ]);

        session()->flash('success', 'Your post has been published!');
        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('editpost',[
            "post"=>$post,
            "categories"=>Category::all()
        ]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'category_id'=>'required',
            'body'=>'required',
        ]);

        $post->update($attributes);

        session()->flash('success', 'Your post has been updated');
        return redirect('/dashboard');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('success', 'Your post has been deleted');
        return back();
    }
}
