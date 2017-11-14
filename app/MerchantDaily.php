<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MerchantDaily extends Model
{
    /** @var string */
    protected $table = "merchant_daily";

    /** @var int */
    protected $primaryKey = "merchant_daily_id";


    public static function getBestSeller()
    {
        return DB::select("SELECT MD.merchant_id AS MerchantID, M.first_name AS FirstName , M.last_name AS LastName, SUM(MD.sales_total) AS SaleTotal FROM merchant_daily AS MD
                            INNER JOIN merchant AS M ON (M.merchant_id = MD.merchant_id)
                          GROUP BY MerchantID
                          ORDER BY SaleTotal DESC 
                          LIMIT 1;");
    }

    public static function getMerchants()
    {
        return DB::select("SELECT DISTINCT(merchant_id) FROM merchant_daily");
    }
}
