<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    /** @var string */
    protected $table = "merchant";

    /** @var string */
    protected $primaryKey = "merchant_id";

    /** @var bool */
    public $incementing = false;
}
