<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0;$i<30;$i++){
            DB::table('tickets')->insert([
            'summary' => $faker->sentence,
            'description' =>$faker->paragraph,
            'status' => $faker->word
        ]);
    }
}
}