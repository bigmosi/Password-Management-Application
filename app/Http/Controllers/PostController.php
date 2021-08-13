<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost() {
        return view ('add-post');
    }

    public function createPost(Request $request) {
        $post = new Post();
        $post->name = $request->name;
        $post->username = $request->username;
        $post->password =Hash::make($request->password);
        $post->save();
        return back()->with('post_created', 'Post has been created successfully! ');
    }
    public function getPost(){
      $posts = Post::orderBy('id', 'DESC')->get();
      return view('posts',compact('posts'));  
    }

    public function getPostById($id){
        $post = Post::where('id',$id)->first();
        return view('single-post', compact('post'));
    }

    public function deletePost($id)
    {
        Post::where('id',$id)->delete();
        return back()->with('post_deleted', 'Post has been deleted successfully!');
    }

    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }
    public function updatePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->name = $request->name;
        $post->username = $request->username;
        $post->password = $request->password;
        $post->save();
        return back()->with('post_updated', 'Post has been updated successfull');
    }
}
