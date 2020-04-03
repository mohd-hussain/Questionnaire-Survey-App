<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = [];

    public function questionnair()
    {
        return $this->belongsTo(Questionnair::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
