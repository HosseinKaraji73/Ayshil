<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Aboutme
 *
 * @property int $id
 * @property string|null $photo
 * @property string $name
 * @property string $rank
 * @property string|null $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $grouping
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme whereGrouping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aboutme query()
 */
class Aboutme extends Model
{
	protected $table="about_me";
	protected $guarded = ['id'];
    protected $fillable = [
        'photo','name','rank','description'
    ];

    public function getPhotoAboutme($value)
    {
        if($value==null)
        {
            return '/images/Client/images/aboutme/null.png';
        }
        return '/images/Client/images/aboutme'.$value;
    }


}
