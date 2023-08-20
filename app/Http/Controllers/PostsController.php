<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');

    }

    public function store()
    {
        $data = request()->validate([
            "caption" => 'required',
            'image' => 'required|'
        ]);

        $imagepath = request('image')->store('uploads', 'public');
//
        auth()->user()->post()->create([
            "caption" => $data['caption'],
            "image" => $imagepath
        ]);

        return redirect('/account/' . auth()->user()->id);
    }

    public function show(Post $post)
    {
return view('posts.show',compact('post'));
    }

}
