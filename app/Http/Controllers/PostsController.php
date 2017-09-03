<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostsController extends Controller {

    public function index() {
      $posts = Post::all();

      return view('posts.index', compact('posts'));
    }

    public function list(Category $category) {
      $validCategory = Category::findOrFail($category->id);
      $title = $category->title;
      $categorySlug = $category->slug;
      $posts = Post::postsByCategory($category->id);
      $postsCount = Post::postsByCategory($category->id)->count();

      return view('posts.list',compact(['title', 'posts', 'postsCount', 'categorySlug']));
    }

    public function show(Category $category, Post $post) {
      Post::findOrFail($post->id);

      return view('posts.show', compact('post'));
    }

}
