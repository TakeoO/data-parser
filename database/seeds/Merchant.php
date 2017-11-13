<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class Merchant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $merchantIDS = App\MerchantDaily::getMerchants();

        $merchants = [];
        foreach ($merchantIDS as $merchantID) {
            $merchants[] = [
                "merchant_id" => $merchantID->merchant_id,
                "first_name" => $faker->firstName,
                "last_name" => $faker->lastName,
            ];
        }

        \App\Merchant::insert($merchants);
    }
}
