<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Log extends Model
{
    protected $fillable = [
      'content', 
      'before_rating', 
      'after_rating', 
      'distortion', 
      'added_on'
    ];

    public function setAddedOnAttribute($date) 
    {
      $this->attributes['added_on'] = Carbon::createFromFormat('Y-m-d', $date);
    }


    public function user() 
    {
      return $this->belongsTo('App\User');
    }

    public function positives() 
    {
      return $this->belongsToMany('App\Positive');
    }
 }
