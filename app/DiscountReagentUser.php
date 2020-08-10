<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DiscountReagentUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $discount_id
 * @property int $reagent_id user_id
 * @property int $used 0:!used | 1:used
 * @property string|null $date_used
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereDateUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereDiscountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereReagentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DiscountReagentUser whereUserId($value)
 * @mixin \Eloquent
 */
class DiscountReagentUser extends Model
{
    //
}
