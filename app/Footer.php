<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Footer
 *
 * @property int $id
 * @property string|null $link
 * @property string|null $logo1
 * @property string|null $logo2
 * @property string|null $logo3
 * @property string|null $logo4
 * @property string|null $description
 * @property string|null $enemad
 * @property string|null $resane
 * @property string|null $qr
 * @property string|null $kasbokar
 * @property string|null $bank
 * @property string|null $supportPhone
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $phone3
 * @property string|null $phone4
 * @property string|null $email
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $address3
 * @property string|null $address4
 * @property string|null $company
 * @property string|null $telegram
 * @property string|null $instagram
 * @property string|null $whatsApp
 * @property string|null $eitta
 * @property string|null $soroush
 * @property string|null $gap
 * @property string|null $google
 * @property string|null $facebook
 * @property string|null $linkedin
 * @property string|null $twitter
 * @property string|null $pinterest
 * @property string|null $tumblr
 * @property string|null $gab
 * @property string|null $reddit
 * @property string|null $rss
 * @property string|null $line
 * @property string|null $Tango
 * @property string|null $othertext1
 * @property string|null $othertext2
 * @property string|null $othertext3
 * @property string|null $othertext4
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereEitta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereEnemad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereGab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereGap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereKasbokar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereLogo1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereLogo2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereLogo3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereLogo4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePinterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereQr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereReddit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereResane($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereRss($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereSoroush($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereSupportPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereTango($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereTumblr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereWhatsApp($value)
 * @mixin \Eloquent
 * @property string|null $description_en
 * @property string|null $supportPhone_en
 * @property string|null $phone1_en
 * @property string|null $phone2_en
 * @property string|null $phone3_en
 * @property string|null $phone4_en
 * @property string|null $address1_en
 * @property string|null $address2_en
 * @property string|null $address3_en
 * @property string|null $address4_en
 * @property string|null $company_en
 * @property string|null $othertext1_en
 * @property string|null $othertext2_en
 * @property string|null $othertext3_en
 * @property string|null $othertext4_en
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress1En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress2En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress3En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereAddress4En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereCompanyEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext1En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext2En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext3En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereOthertext4En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone1En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone2En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone3En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer wherePhone4En($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Footer whereSupportPhoneEn($value)
 */
class Footer extends Model
{
    protected $fillable = [
        'logo1', 'logo2', 'logo3', 'logo4', 'instagram', 'telegram', 'google', 'linkedin', 'whatsup', 'facebook', 'address1', 'address2','phone1','phone2','othertext1','othertext2'
    ];
}
