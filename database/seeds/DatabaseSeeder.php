<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(UserImageSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(FriendSeeder::class);
    }
}
