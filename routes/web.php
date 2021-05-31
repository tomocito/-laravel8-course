<?php
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // すべての記事を取得
    $posts = Post::with('category')->get();

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

Route::get('/categories/{category:slug}', function (Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});