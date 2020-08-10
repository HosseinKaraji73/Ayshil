<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserRate
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property int $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserRate whereUserId($value)
 * @mixin \Eloquent
 */
class UserRate extends Model
{
    protected $fillable = [
        'user_id', 'product_id','rate'
    ];
}
