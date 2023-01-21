<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServiceChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cleaning_charges')->insert([
            'name' => "studio",
            'type' => "bedrooms",
            'charge' => "20",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "1",
            'type' => "bedrooms",
            'charge' => "1",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "2",
            'type' => "bedrooms",
            'charge' => "2",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "3",
            'type' => "bedrooms",
            'charge' => "3",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "4",
            'type' => "bedrooms",
            'charge' => "4",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "5",
            'type' => "bedrooms",
            'charge' => "5",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "6",
            'type' => "bedrooms",
            'charge' => "6",
        ]);

        DB::table('cleaning_charges')->insert([
            'name' => "studio",
            'type' => "bathrooms",
            'charge' => "20",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "1",
            'type' => "bathrooms",
            'charge' => "1",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "2",
            'type' => "bathrooms",
            'charge' => "2",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "3",
            'type' => "bathrooms",
            'charge' => "3",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "4",
            'type' => "bathrooms",
            'charge' => "4",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "5",
            'type' => "bathrooms",
            'charge' => "5",
        ]);
        DB::table('cleaning_charges')->insert([
            'name' => "6",
            'type' => "bathrooms",
            'charge' => "6",
        ]);
        DB::table('users')->insert([
            'name' => "Mir Sisir",
            'email' => "mirsisir@gmail.com",
            'password' => Hash::make('12345678'),
        ]);


    }
}
