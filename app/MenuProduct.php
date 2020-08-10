<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MenuProduct
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $name
 * @property string|null $name_en
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubMenuProduct[] $SubMenuProducts
 * @property-read int|null $sub_menu_products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MenuProduct whereNameEn($value)
 */
class MenuProduct extends Model
{
    protected $fillable = [
        'name', 'name_en',
    ];

    public function SubMenuProducts()
    {
        return $this->hasMany(SubMenuProduct::class);
    }
}
