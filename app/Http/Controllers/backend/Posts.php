<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Posts as ModelsPosts;
use Illuminate\Http\Request;

class Posts extends Controller
{
    public function getPosts()
    {
        $posts = ModelsPosts::orderBy('id', 'DESC')->get();
        $data = compact('posts');
        return view('backend.posts')->with($data);
    }

    public function addPost(Request $request)
    {
        $request->validate([
            'post_image' => 'required|mimes:png,jpg,jpeg',
            'post_title' => 'required',
            'post_category' => 'required',
            'post_desc' => 'required',
        ]);
        if ($request->hasFile('post_image')) {
            $post_image = time() . ' ' . $request->file('post_image')->getClientOriginalName();
            $request->file('post_image')->move(public_path() . '/uploads/', $post_image);

            $post = new  ModelsPosts();
            $post->post_image = $post_image;
            $post->post_title = $request->input('post_title');
            $post->contact_desc = $request->input('post_desc');
            $post->post_category = $request->input('post_category');

            if ($post->save()) {
                $request->session()->flash('success', 'Post Added Successfully');
                return redirect('/admins/posts');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/posts');
            }
        }
    }





    public  function editPost($id)
    {
        $post = ModelsPosts::find($id);
        $data = compact('post');
        return view('backend.edit-post-form', ['post' => $post]);
    }

    public  function updatePost(Request $request)
    {
        $request->validate([
            'post_image' => 'mimes:png,jpg,jpeg',
            'post_title' => 'required',
            'post_desc' => 'required',
        ]);
        $post =  ModelsPosts::find($request->input('postId'));
        if ($post) {

            if ($request->hasFile('post_image')) {
                $post_image = time() . ' ' . $request->file('post_image')->getClientOriginalName();
                $request->file('post_image')->move(public_path() . '/uploads/', $post_image);
                $post->post_image = $post_image;
            }

            $post->post_title = $request->input('post_title');
            $post->contact_desc = $request->input('post_desc');
            if ($request->input('post_category')) {
                $post->post_category = $request->input('post_category');
            }
            $isUpdated = $post->update();
            if ($isUpdated) {
                $request->session()->flash('success', 'Post Updated Successfully');
                return redirect('/admins/posts');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/posts');
            }
        } else {
            $request->session()->flash('error', 'Post Dose Not Exists');
            return redirect('/admins/posts');
        }
    }
}
