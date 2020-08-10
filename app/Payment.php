<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Payment
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $discount_id
 * @property int|null $discount_user_id
 * @property string $invoice_id
 * @property int $bank_invoice_id
 * @property int $bank_receipt
 * @property string $price
 * @property string $cart_cost
 * @property string $discountPrice
 * @property string $tax_percent
 * @property string $authority
 * @property string $date_create
 * @property string|null $discount_type
 * @property int $payed 0:!payed | 1:payed
 * @property string|null $reference
 * @property string $payment_method wallet , online
 * @property string $gateway_type
 * @property int|null $type 0:online | 1:payLocation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereBankInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereBankReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereCartCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereDateCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereDiscountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereDiscountUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereGatewayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePayed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereTaxPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Payment whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Discount|null $discount
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\User $users
 */
class Payment extends Model
{
    protected $fillable = [
        'user_id','discount_id','discount_user_id','invoice_id','bank_invoice_id','bank_receipt','price',
        'cart_cost','discountPrice','tax_percent','authority','date_create','discount_type','payed','reference',
        'payment_method','gateway_type','type'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
