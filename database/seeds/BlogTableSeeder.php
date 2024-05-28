<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
           [
            'blog_title' => 'blog title 02',
            'blog_content' => 'blog_content_02'
           ],
            [
                'blog_title' => Str::random(10).'gmail.com',
                'blog_content' => 'blog_content_02'.'Casuu'
            ]
        ]);
    }
}
