<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
  public function run() {
    $categories = [
      [
        'id' => 1,
        'title' => 'Web dev',
        'slug' => 'webdev',
      ],
      [
        'id' => 2,
        'title' => 'Philosophy',
        'slug' => 'philosophy',
      ],
      [
        'id' => 3,
        'title' => 'Psychology',
        'slug' => 'psychology',
      ],
    ];

    foreach ($categories as $category) {
      DB::table('categories')->insert($category);
    }
  }
}
