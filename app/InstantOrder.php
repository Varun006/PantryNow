<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstantOrder extends Model
{
    protected $guarded = ['id'];

    protected $table = 'instantOrders';
}
