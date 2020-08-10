<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'panel/admin/discount/code' ,
        'panel/admin/info/for/discount',
        '/panel/admin/discount',
        '/login',
        '/food/search',
        '/chef/sort',
        '/chef/foods/filter',
        'panel/user/food/rate/save',
        '/check/user/credit/supply',
        '/check/reserve/date',
        '/send/sms/link/download/app',



        'panel/user/product/rate/save',


    ];
}
