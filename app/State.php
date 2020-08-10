<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    Protected $fillable=[
        'name','normal_post','express_post'
    ];
}
