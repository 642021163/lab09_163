<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'name' => "sim",
                'password' => md5("123456"),
                "email" => "sim@gmail.com",
                "adress" => "cu",
                "telephone" => "088881623"
            ],
            [
                'name' => "bangdee",
                'password' => md5("123456"),
                "email" => "bangdee@gmail.com",
                "adress" => "psu",
                "telephone" => "088881624"
            ],
            [
                'name' => "kajoy",
                'password' => md5("123456"),
                "email" => "kajoy@gmail.com",
                "adress" => "cus",
                "telephone" => "188881623"
            ],
        ]);
    }
}
