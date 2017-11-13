<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantHourly extends Model
{
    /** @var string */
    protected $table = "merchant_hourly";

    /** @var int */
    protected $primaryKey = "merchant_hourly_id";
}
