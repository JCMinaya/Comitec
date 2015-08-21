<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'question'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
