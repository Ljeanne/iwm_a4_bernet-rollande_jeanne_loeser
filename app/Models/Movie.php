<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{


    /**
     * The Table
     *
     * @var string
     */
    protected $table = "movies";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $cast = [
        'favorite' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'movie_id', 'category', 'seen'
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
