<?php

use Illuminate\Database\Seeder;

class MerchantHourly extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \App\Library\Parser::parse("https://app.periscopedata.com/api/carthook/chart/csv/5ab06803-29bf-76b2-6a5a-ad7cf4b7fc21/284541");

        if (count($data))
            App\MerchantHourly::insert($data);
    }
}
