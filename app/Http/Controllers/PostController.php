<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);  
        //indexに対してデータを付け加えて返す、postsという配列に対してpost1、post2とデータが入っている。
    }
}
