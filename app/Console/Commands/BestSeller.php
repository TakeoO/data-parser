<?php

namespace App\Console\Commands;

use App\MerchantDaily;
use Illuminate\Console\Command;

class BestSeller extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'merchant:bestseller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets best seller merchant';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $bestSeller = MerchantDaily::getBestSeller();

       if(!count($bestSeller))
           $this->error("RUN MIGRATIONS AND SEEDS");
       else{
           $this->comment("Best seller is %s %s with %s € in sales!", $bestSeller["FirstName"],$bestSeller["FirstName"],$bestSeller["SaleTotal"]);
       }
    }
}
