<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{



    protected $table = 'coupons';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'CouponName',
                  'discountType',
                  'amount',
                  'expDate',
                  'isUsed',
                  'UseType'
              ];


    protected $dates = [];

    protected $hidden = ['isUsed','UseType','created_at','updated_at'];


    protected $casts = [];



}
