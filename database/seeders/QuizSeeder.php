<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("quizzes")->insert([
            [
                "title"=> "Title1",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> true
            ],
            [
                "title"=> "Title2",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> false
            ],
            [
                "title"=> "Title3",
                "description"=> "Description3",
                "image"=> null,
                "status"=> true
            ],
            [
                "title"=> "Title4",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> true
            ],
            [
                "title"=> "Title5",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> false
            ],
            [
                "title"=> "Title6",
                "description"=> "Description6",
                "image"=> null,
                "status"=> true
            ],
            [
                "title"=> "Title7",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> true
            ],
            [
                "title"=> "Title8",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> false
            ],
            [
                "title"=> "Title9",
                "description"=> "Description9",
                "image"=> null,
                "status"=> true
            ],
            [
                "title"=> "Title10",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> true
            ],
            [
                "title"=> "Title11",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> false
            ],
            [
                "title"=> "Title12",
                "description"=> "Description12",
                "image"=> null,
                "status"=> true
            ],
            [
                "title"=> "Title13",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> true
            ],
            [
                "title"=> "Title14",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> false
            ],
            [
                "title"=> "Title15",
                "description"=> "Description15",
                "image"=> null,
                "status"=> true
            ],
            [
                "title"=> "Title16",
                "description"=> null,
                "image"=> "https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg",
                "status"=> true
            ],
        ]);
    }
}
