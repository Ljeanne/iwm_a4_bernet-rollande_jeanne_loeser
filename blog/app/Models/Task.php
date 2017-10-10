<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
    * The Table
    *
    * @var string
    */
    protected $table = "tasks";

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'user_id', 'title', 'description',
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [

    ];

    public function user(){
      return $this->belongsTo('App\Models\User');
    }
}
