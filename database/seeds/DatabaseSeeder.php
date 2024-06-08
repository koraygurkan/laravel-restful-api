<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CoursemTableSeeder::class);
        //$this->call(UserTableSeeder::class);
       // $this->call(  CategoriesTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        DB::statement("TRUNCATE TABLE products"); //product tablosunun içerisini boşaltır
        DB::statement("TRUNCATE TABLE users"); //user tablosunun içerisini boşaltır
        DB::statement("TRUNCATE TABLE categories");

        //veri ekleme
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'cansukoraydanaci@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(123),
            'remember_token' => Str::random(10),
        ]);


        //factory ile rastgele veri ekleme
        factory(Product::class,1000)->create();
        factory(Category::class,50)->create();
        factory(User::class,10)->create();





        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
