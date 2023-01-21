<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{



    protected $table = 'checklists';


    protected $primaryKey = 'id';


    protected $fillable = [
                  'name',
                  'checklist_category_id',
                  'is_In40_Checklist',
                  'is_In50_Checklist'
              ];

    protected $dates = [];


    protected $casts = [];

    public function checklistCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\ChecklistCategory','checklist_category_id');
    }



}
