<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variations extends Model
{
    protected $guarded = ['id'];

    protected $table = 'variations';

    public function products()
    {
//        return $this->hasMany();
    }
}
