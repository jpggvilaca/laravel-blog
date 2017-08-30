<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin');
    }

    public function add(Request $request) {
      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;

      $post->save();

      return redirect('admin');
    }
}
