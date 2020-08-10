<?php

namespace App\Http\Controllers\Panel\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Morilog\Jalali\jDate;
use App\Http\Controllers\FrontEnd\CartController;


/**
 * Class: DiscountController
 * A Class That Manages Discounts In User Panel
 */
class DiscountController extends Controller
{
    /**
     * Function: showUnusedDiscountCode
     * Returns:
     *  Return View
     */
    public function showUnusedDiscountCode()
    {
        $user = Auth::user();
        $discounts = app('App\Http\Controllers\FrontEnd\CartController')->computeDiscountUser($user);
        return view('BackEnd.Pages.User.Discount.index',compact('discounts'));
    }
}
