<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    


    protected $table = 'general_settings';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'value',
                  'description'
              ];


    protected $dates = [];


    protected $casts = [];




}
