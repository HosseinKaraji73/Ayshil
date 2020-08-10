<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Slider
 *
 * @property int $id
 * @property string|null $title1
 * @property string|null $title2
 * @property string|null $title3
 * @property string|null $title4
 * @property string|null $description
 * @property string|null $photo1
 * @property string|null $photo2
 * @property string|null $photo3
 * @property string|null $photo4
 * @property string|null $group
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider wherePhoto1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider wherePhoto2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider wherePhoto3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider wherePhoto4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $title1_en
 * @property string|null $title2_en
 * @property string|null $title3_en
 * @property string|null $title4_en
 * @property string|null $description_en
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle1En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle2En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle3En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slider whereTitle4En($value)
 */
class Slider extends Model
{
    protected $fillable = [
        'title', 'description','photo1','photo2','photo3','photo4','photo5','photo6','photo7','group'
    ];
}
