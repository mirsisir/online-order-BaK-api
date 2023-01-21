<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    


    protected $table = 'employees';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'email',
                  'phone',
                  'zipCode',
                  'JobPosition',
                  'TimeOFWorking',
                  'Smartphone',
                  'languages',
                  'allergies',
                  'IsExperienceCleaning'
              ];


    protected $dates = [];


    protected $casts = [];




}
