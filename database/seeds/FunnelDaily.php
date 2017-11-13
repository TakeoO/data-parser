<?php

use Illuminate\Database\Seeder;

class FunnelDaily extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \App\Library\Parser::parse("https://app.periscopedata.com/api/carthook/chart/csv/b3bb3bbd-0ea3-8234-64bd-3cb474631c30/284541");

        if (count($data))
            App\FunnelDaily::insert($data);
    }
}
