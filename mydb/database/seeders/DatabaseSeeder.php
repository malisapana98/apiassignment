<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Testing\Fakes\Fake;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $faker=Faker::create();
       foreach(range(1,50)as $index){
        DB::table('students')->insert([
            'name'=>$faker->name,
            'email'=>$faker->email,
            'phone'=>$faker->phoneNumber
        ]);
       }
        
    }
}
