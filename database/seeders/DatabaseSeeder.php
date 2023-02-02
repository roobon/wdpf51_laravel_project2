<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Calling Factory
        Product::factory(100)->create();

        // Calling Seeder
        // $this->call([
        //     //ProductSeeder::class
        // ]);
        $user = new User();
        $user->name = 'Naymur Rahman';
        $user->email = 'naymur@example.com';
        $user->password = Hash::make('abcd1234');
        $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
        $user->name = 'Kamrul Hasan';
        $user->email = 'kamrul@example.com';
        $user->password = Hash::make('abcd1234');
        $user->remember_token = Str::random(10);
        $user->save();

        $phone = new Phone();
        $phone->user_id = 1;
        $phone->phone = rand(412412313, 4124123131);
        $phone->save();

        $phone = new Phone();
        $phone->user_id = 2;
        $phone->phone = rand(412412313, 4124123131);
        $phone->save();

        // Post and Comments Seeder

        // post seeder
        for ($i = 1; $i <= 15; $i++) {
            $post = new Post();
            $post->name = Str::random(20);
            $post->save();
        }
        //Comment seeder 
        for ($i = 1; $i <= 50; $i++) {
            $comment = new Comment();
            $comment->post_id = rand(1, 15);
            $comment->comment = Str::random(10);
            $comment->save();
        }
    }
}
