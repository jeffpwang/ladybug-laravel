<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positive extends Model
{
    protected $fillable = [
      'content', 
    ];


    public function user() 
    {
      return $this->belongsTo('App\User');
    }

    public function logs() {
      return $this->belongsToMany('App\Log');
    }
}
