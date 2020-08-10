<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @property int $id
 * @property int $user_id customer_id
 * @property int $product_id
 * @property int $owner_id chef_id
 * @property string $product_price
 * @property int $order_count
 * @property string $invoice_id
 * @property int $pay_location
 * @property string $status Supply , Preparation, Packing , Send
 * @property int $cancel 0:!cancel | 1:cancel
 * @property string|null $address
 * @property string|null $description
 * @property string $date_create
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereDateCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereOrderCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePayLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Discount $discount
 * @property-read \App\Payment $payment
 * @property-read \App\Product $product
 * @property-read \App\User|null $user
 */
class Order extends Model
{
    protected $fillable = [
        'user_id','product_id','owner_id','product_price','order_count','invoice_id','pay_location','status','cancel','address','description','date_create'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
