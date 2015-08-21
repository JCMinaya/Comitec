<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'majors';

    protected $fillable = ['name'];

    public function comite()
    {
        return $this->hasOne('App\Comite');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }

    public function polls()
    {
        return $this->belongsToMany('App\Poll');
    }
}