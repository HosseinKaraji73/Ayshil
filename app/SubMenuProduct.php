<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubMenuProduct
 *
 * @property int $id
 * @property int|null $menuProducts_id
 * @property string|null $name
 * @property string|null $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\MenuProduct $MenuProduct
 * @property-read \App\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct whereMenuProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubMenuProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubMenuProduct extends Model
{


    protected $fillable = [
        'menuProducts_id','name', 'name_en',
    ];

    public function MenuProduct()
    {
        return $this->belongsTo(MenuProduct::class);
    }


    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
