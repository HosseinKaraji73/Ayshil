<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Discount
 *
 * @property int $id
 * @property int $user_id
 * @property int $discount_id
 * @property int $reagent_id user_id
 * @property int $used 0:!used | 1:used
 * @property string|null $date_used
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereDateUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereDiscountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereReagentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereUserId($value)
 * @mixin \Eloquent
 */
class Discount extends Model
{
    //
}
