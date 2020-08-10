<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OrdersRate
 *
 * @property int $id
 * @property int $payment_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrdersRate whereUserId($value)
 * @mixin \Eloquent
 */
class OrdersRate extends Model
{

}
