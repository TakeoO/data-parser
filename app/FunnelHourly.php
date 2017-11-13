<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FunnelHourly extends Model
{
    /** @var string */
    protected $table = "funnel_hourly";

    /** @var int */
    protected $primaryKey = "funnel_hourly_id";
}
