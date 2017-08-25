<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');
        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('ads')->insert([
                'category_id' => $faker->biasedNumberBetween(0,10),
                'type_id' => $faker->biasedNumberBetween(0,2),
                'user_id' => $faker->biasedNumberBetween(1,5),
                'title' => $faker->text(50),
                'slug' => str_slug($faker->text(50)),
                'text' => $faker->text(),
                'price' => $faker->biasedNumberBetween(100,2000),
                'phone' => $faker->phoneNumber,
                'confirm' => 1,
                'status' => 1,
                'options' => json_encode(['user_agent' => $faker->userAgent]),
            ]);
        }
    }
}
