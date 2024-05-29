<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();
        return view('home', ['posts' => $posts]);
    }
    public function store()
    {
        $attributes = request()->validate([
            'content' => ['required_without:image',"max:1000"],
            'image' => ['required_without:content', 'image'],
        ]);

        $userId = Auth::id();
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imageContents = file_get_contents($image->getRealPath());
            // $base64Image = base64_encode($imageContents);
            // $imageExtension = $image->getClientOriginalExtension();
            // $imageFileName = Str::random(20) . '.' . $imageExtension; 
        }

        $post = new Post([
            'type' => 'annance',
            'content' => $attributes['content'] ?? '',
            'image' => $imageContents ?? null,
            'user_id' => $userId,
        ]);
        
    
        $post->save();

        session()->flash('success', 'Your post has been created.');

        return redirect('/');
    }
}
