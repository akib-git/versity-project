<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notices')->insert([
            [
                "title" => "Notice 01",
                "image" => "notice01.jpg",
                "category" => "CSE",
                "session" => "2016-17",
                "created_at" => "2021-07-29 22:22:18",
            ],
            [
                "title" => "Notice 02",
                "image" => "notice02.jpg",
                "category" => "BBA",
                "session" => "2016-17",
                "created_at" => "2021-07-29 22:22:18",
            ],
            [
                "title" => "Notice 03",
                "image" => "notice03.jpg",
                "category" => "MM",
                "session" => "2016-17",
                "created_at" => "2021-07-29 22:22:18",
            ],
            [
                "title" => "Notice 04",
                "image" => "notice04.jpg",
                "category" => "SS",
                "session" => "2016-17",
                "created_at" => "2021-07-29 22:22:18",
            ],
        ]);
    }
}
