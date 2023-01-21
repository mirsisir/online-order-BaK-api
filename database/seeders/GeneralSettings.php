<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'name' => "site name",
            'value' => "Book A Klean",
        ]);
        DB::table('general_settings')->insert([
            'name' => "title",
            'value' => "Book A Klean",
        ]);
        DB::table('general_settings')->insert([
            'name' => "email",
            'value' => "test@gmail.com",
        ]);
        DB::table('general_settings')->insert([
            'name' => "phone",
            'value' => "1234567890",
        ]);
        DB::table('general_settings')->insert([
            'name' => "address",
            'value' => "Sunt minus aut exped",
        ]);
        DB::table('general_settings')->insert([
            'name' => "address",
            'value' => "Sunt minus aut exped",
        ]);
        DB::table('general_settings')->insert([
            'name' => "logo",
            'value' => "images/favicon.png",
        ]);
        DB::table('general_settings')->insert([
            'name' => "logo",
            'value' => "images/favicon.png",
        ]);

    }
}
