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

    public static function getBestSellerByTimePeriod()
    {
        return DB::select("SELECT b.merchant_id AS UserID, b.analytics_date AS PeriodStart, DATE_ADD(b.analytics_date, INTERVAL 3 HOUR) AS PeriodEnd,
                            (b.sales_total + MH1.sales_total + MH2.sales_total) AS PeriodTotalSale
                            FROM merchant_hourly AS b 
                              INNER JOIN merchant_hourly MH1 ON (DATE_ADD(MH1.analytics_date, INTERVAL 1 HOUR) = b.analytics_date)
                              INNER JOIN merchant_hourly MH2 ON (DATE_ADD(MH1.analytics_date, INTERVAL 2 HOUR) = b.analytics_date)
                              ORDER BY PeriodTotalSale DESC
                              ");
    }


    public static function getMerchants()
    {
        return DB::select("SELECT DISTINCT(merchant_id) FROM merchant_daily");
    }
}
