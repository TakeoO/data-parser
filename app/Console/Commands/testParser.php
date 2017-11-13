<?php

namespace App\Console\Commands;

use App\Library\Parser;
use App\MerchantDaily;
use Illuminate\Console\Command;

class testParser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:parser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
       print_r(MerchantDaily::getBestSellerByTimePeriod());
    }
}
