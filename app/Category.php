<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
  public function getAllCategories() {
    return Category::all();
  }

  public function getRouteKeyName() {
    return 'slug';
  }

  public function posts() {
    return $this->hasMany('App\Post');
  }
}
