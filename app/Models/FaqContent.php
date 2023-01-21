<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqContent extends Model
{

    protected $appends = ['category'];


    protected $table = 'faq_contents';


    protected $primaryKey = 'id';


    protected $fillable = [
                  'questions',
                  'answer',
                  'FaqCategory_id'
              ];


    protected $dates = [];


    protected $casts = [];

    public function faqCategory()
    {
        return $this->belongsTo('App\Models\FaqCategory','FaqCategory_id');
    }


    public function getCategoryAttribute(): string
    {
        return FaqCategory::find($this->FaqCategory_id)->name;

    }


}
