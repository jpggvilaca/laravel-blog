<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
  public function getAllPosts() {
    return Post::all();
  }

  public function getCategoryID($post) {
    return $post->categoryID;
  }

  public function getRouteKeyName() {
    return 'slug';
  }

  public static function postsByCategory($category) {
    return Post::where('categoryID', $category)->get();
  }

  public function categories() {
    return $this->belongsTo('App\Category');
  }
}
