<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

      if (Auth::user()) {
        return redirect()->route('admin.posts.index');
      }

        $posts = Post::all();
        $tags = Tag::all();

        $data = [
          'posts' => $posts,
          'tags' => $tags
        ];

        return view('guests.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComment = new Comment;
        $newComment->fill($data);

        $saved = $newComment->save();

        if (!$saved) {
          return redirect()->back()->withInput();
        }

        $slug = Post::where('id', $data['post_id'])->first()->slug;
        return redirect()->route('posts.show', $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $post = Post::where('slug', $slug)->first();
      $comments = Comment::where('post_id', $post->id)->get();

      $data = [
        'post' => $post,
        'comments' => $comments
      ];


      return view('guests.posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
