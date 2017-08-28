<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduledOrder extends Model
{
    protected $guarded = ['id'];

    protected $table = 'scheduledOrders';
}
