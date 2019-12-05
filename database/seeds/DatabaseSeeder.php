<?php

use App\User;
use Illuminate\Database\Seeder;
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
        User::create([
           'name' => 'Admin',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('123456'),
           'role' => 'ADMIN',
           'remember_token' => Str::random(10),
        ]);
        factory(User::class, 100)->create();

        $this->call(OfferTableSeederFaker::class);
        $this->call(ArticleTableSeederFaker::class);
    }
}
