<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_chats')->insert([
            "doctor" => 2,
            "patient" => 1,
            "chat" => "How are you ?"
        ]);
    }
}
