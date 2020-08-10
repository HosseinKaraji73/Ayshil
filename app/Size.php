<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
      protected $fillable = [
        'name'
    ];


    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
