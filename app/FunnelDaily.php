<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunnelDaily extends Model
{
    /** @var string */
    protected $table = "funnel_daily";

    /** @var int */
    protected $primaryKey = "funnel_daily_id";
}
