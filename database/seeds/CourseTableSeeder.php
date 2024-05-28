<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            [
                'course_title' => 'PHP',
                'course_content' => 'php content içerik',
                'course_must' => 1
            ],
            [
                'course_title' => 'Bootstrap',
                'course_content' => 'Bootstrap Eğitim içerik',
                'course_must' => 2
            ],
            [
                'course_title' => 'JS',
                'course_content' => 'JS Eğitim içerik',
                'course_must' => 3
            ],
            [
                'course_title' => 'Laravel',
                'course_content' => 'Laravel Eğitim İçeriği',
                'course_must' => 4
            ]
        ]);
    }
}
