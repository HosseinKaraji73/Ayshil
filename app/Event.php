<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\News
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $text
 * @property string $photo1
 * @property string|null $photo2
 * @property string|null $photo3
 * @property string|null $photo4
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePhoto1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePhoto2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePhoto3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePhoto4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $title_en
 * @property string|null $description_en
 * @property string|null $text_en
 * @property string|null $cteated_at_fa
 * @property string|null $updated_at_fa
 * @property string|null $grouping
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCteatedAtFa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereGrouping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereTextEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUpdatedAtFa($value)
 */
class Event extends Model
{
    protected $fillable = ['title','title_en','text','text_en','description','description_en','photo1','cteated_at_fa','updated_at_fa'];
}
