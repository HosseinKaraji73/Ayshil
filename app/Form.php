<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Form
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $name
 * @property string|null $family
 * @property string|null $subject
 * @property string|null $proficiency
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property string|null $group
 * @property string|null $pdf
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form wherePdf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereProficiency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Form whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Form extends Model
{
    protected $guarded= ['id'];
    protected $fillable=[
        'name','family','subject','proficiency','email','phone','message','pdf','group','parent_id'
    ];
}
