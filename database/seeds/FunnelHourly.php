<?php

use Illuminate\Database\Seeder;

class FunnelHourly extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \App\Library\Parser::parse("https://app.periscopedata.com/api/carthook/chart/csv/b5798a66-e694-a429-cc5e-2f9e163f6438/284541");

        if (count($data))
            App\FunnelHourly::insert($data);
    }
}
