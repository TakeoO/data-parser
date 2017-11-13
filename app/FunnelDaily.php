<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FunnelDaily extends Model
{
    /** @var string */
    protected $table = "funnel_daily";

    /** @var int */
    protected $primaryKey = "funnel_daily_id";

    public static function getBestSeller()
    {
        return DB::select("SELECT M.merchant_id AS MID, M.first_name as FirstName, M.last_name as LastName, BF.funnel_id, MD.sales_total, BF.sales_total as FunnelBest
	FROM merchant_daily MD
	INNER JOIN (
	SELECT merchant_id, funnel_id, sales_total, conversions_total FROM funnel_daily
		GROUP BY merchant_id
	HAVING MAX(sales_total)

	 ) AS BF ON BF.merchant_id = MD.merchant_id
	 INNER JOIN merchant M ON (MD.merchant_id = M.merchant_id);");
    }
}
