<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnair extends Model
{
   protected $guarded = [];

   public function path()
   {
       return url('/questionnair/' . $this->id );
   }

   public function publicPath()
   {
       return url('/serveys/'. $this->id);
   }



   public function user(){
       return $this->belongsTo(User::class);
   }

   public function questions(){

        return $this->hasMany(Question::class);
   }

   public function serveys()
   {
       return $this->hasMany(Survey::class);
   }
}
