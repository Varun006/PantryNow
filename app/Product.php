<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->hasOne(Category::class);
    }
}
