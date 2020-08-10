<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DiscountUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $discount_id
 * @property int $used 0:!used | 1:used
 * @property string $offset
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser whereDiscountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser whereOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountUser whereUserId($value)
 * @mixin \Eloquent
 */
class DiscountUser extends Model
{
    //
}
