<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Video
 *
 * @property int $id
 * @property string|null $link
 * @property string|null $title
 * @property string|null $time
 * @property string|null $picture
 * @property string $fav
 * @property string|null $description
 * @property string|null $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereFav($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $title_en
 * @property string|null $time_en
 * @property string|null $description_en
 * @property string|null $category_en
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereCategoryEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereTimeEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereTitleEn($value)
 */
class Video extends Model
{
    protected $fillable = ['url','picture','link','fav','title','title_en'];
}
