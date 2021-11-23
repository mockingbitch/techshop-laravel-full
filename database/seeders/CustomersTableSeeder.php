<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 500000;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('customers')->insert([
                'customerName' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
                'emailVerify'=>$faker->status,
            ]);
        }
    }
}
