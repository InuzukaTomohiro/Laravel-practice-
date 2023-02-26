<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
  public function index(Request $request)
  {
    $keyword = $request->keyword;

    if(!empty($keyword)) {
      $searchPosts = Post::where('title', 'like', '%'.$keyword.'%')->get();
    } else {
      return redirect('/home');
    }

    return view('search.index', compact('keyword', 'searchPosts'));
  }
}
