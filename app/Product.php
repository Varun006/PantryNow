<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;

    protected $guarded = ['id'];

    public function categories()
    {
        return $this->hasOne(Category::class);
    }
}
