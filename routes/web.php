<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    // すべての記事を取得
    $posts = Post::all();

    // $posts（すべての記事のコレクション）をpostsとしてviewに送る
    return view('posts', [
        'posts' => $posts
    ]);
});


// /posts/(記事ID)　
Route::get('/posts/{post:slug}', function (Post $post) {

    // $post(記事)
    return view('post', [
        'post' => $post
    ]);
});

