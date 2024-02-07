<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    \App\Models\User::create([
      'username' => 'admin',
      'email' => 'admin@gmail.com',
      'firstname'=> 'Admin',
      'password' => '123456',
    ]);

    \App\Models\User::create([
      'username' => 'mukhlis',
      'email' => 'mukhlis@gmail.com',
      'firstname'=> 'Mukhlis',
      'password' => '123456',
    ]);

    \App\Models\User::create([
      'username' => 'root',
      'email' => 'root@gmail.com',
      'firstname'=> 'Root',
      'password' => '123456',
    ]);

    Post::create([
      'title' => 'Ini adalah judul pertama',
      'news_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quaerat provident amet quis distinctio dolores sint nostrum excepturi! Eveniet perferendis rerum quasi dolorum porro unde veritatis consequuntur beatae? Amet, aperiam.',
      'author' => 1
    ]);

    Post::create([
      'title' => 'Ini adalah judul kedua',
      'news_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quaerat provident amet quis distinctio dolores sint nostrum excepturi! Eveniet perferendis rerum quasi dolorum porro unde veritatis consequuntur beatae? Amet, aperiam.',
      'author' => 2
    ]);


  }
}
