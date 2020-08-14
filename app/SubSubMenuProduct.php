<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubMenuProduct extends Model
{
    protected $fillable = [
        'subMenuProducts_id','name',
    ];

    public function MenuProduct()
    {
        return $this->belongsTo(SubMenuProduct::class);
    }


    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
