<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
      'content', 
      'before_rating', 
      'after_rating', 
      'distortion'
    ];


    public function user() {
      return $this->belongsTo('App\User');
    }
 }
