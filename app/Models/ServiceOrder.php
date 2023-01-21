<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{


    protected $table = 'service_orders';


    protected $primaryKey = 'id';


    protected $fillable = [
                  'location',
                  'numberOfBathrooms',
                  'numberOfBedrooms',
                  'cleanType',
                  'recurring',
                  'date',
                  'time',
                  'address',
                  'apt',
                  'zipCode',
                  'wayIn',
                  'addOne',
                  'havePets',
                  'note',
                  'isPaid',
                  'status',
                  'full_name',
                  'email',
                  'phone',
                  'contactOption',
                  'option1',
                  'option2'
              ];

    protected $dates = [];


    protected $casts = [];




}
