<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MerchantDaily::class);
        $this->call(MerchantHourly::class);
        $this->call(FunnelDaily::class);
        $this->call(FunnelHourly::class);
        $this->call(Merchant::class);
    }
}
