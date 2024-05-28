<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kodlar parçalanmasın diye bu şekilde ayrıştırılabilir.
        /*
        DB::statement("TRUNCATE TABLE users");
        //veri ekleme
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'cansukoraydanaci@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(123),
            'remember_token' => Str::random(10),
        ]);

        factory(User::class,10)->create();
        */
    }
}
