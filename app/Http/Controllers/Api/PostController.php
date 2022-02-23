<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(){

    // prendo solo i post pubblicati
    $posts = Post::all()->where("posted", 1);

    // $posts = Post::all();
    return response()->json([$posts]);
  }
}
