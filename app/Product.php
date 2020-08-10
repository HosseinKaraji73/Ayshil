<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property int $id
 * @property int $menu_id
 * @property string $name
 * @property string|null $description
 * @property int $price
 * @property string|null $recipes
 * @property int $buy_count
 * @property int|null $min
 * @property int|null $max
 * @property float $rate
 * @property string $category normal , gym
 * @property int $available 0:!available | 1:available
 * @property int|null $confirm 0:!confirm | 1:confirm
 * @property int|null $new 0:!new | 1:new
 * @property string|null $photo1
 * @property string|null $photo2
 * @property string|null $photo3
 * @property string|null $photo4
 * @property string|null $photo5
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereBuyCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereConfirm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePhoto1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePhoto2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePhoto3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePhoto4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePhoto5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereRecipes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $sub_menu_product
 * @property string|null $name_en
 * @property string $title
 * @property string $title_en
 * @property string|null $brand
 * @property string|null $brand_en
 * @property string|null $color
 * @property string|null $color_en
 * @property string|null $description_en
 * @property int|null $discount
 * @property int|null $price_after_discount
 * @property int $price_en
 * @property string|null $recipes_en
 * @property-read \App\SubMenuProduct $SubMenuProduct
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereBrandEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereColorEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePriceAfterDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePriceEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereRecipesEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSubMenuProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTitleEn($value)
 */
class Product extends Model
{
    protected $fillable = [
        'menu_id','name','name_en','title','title_en','brand','brand_en','color','color_en','description','description_en','price',
        'price_en','recipes','recipes_en','buy_count','rate','category','available','confirm','new','photo1','photo2',
        'photo3','photo4','photo5',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }



    public function SubMenuProduct()
    {
        return $this->belongsTo(SubMenuProduct::class);
    }

     public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

}


