<?php

use Illuminate\Database\Seeder;

class MerchantDaily extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \App\Library\Parser::parse("https://app.periscopedata.com/api/carthook/chart/csv/d5345630-811c-cd5a-b3e2-c4a6ac1dae1a/265769");

        if (count($data))
            App\MerchantDaily::insert($data);

    }

}
