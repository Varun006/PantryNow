<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingOrder extends Model
{
    protected $table = 'shipping_order';

    protected $guarded = ['id'];
}
