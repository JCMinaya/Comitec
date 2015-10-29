<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'date', 'event_date', 'location'];

    public function comite()
    {
        return $this->belongsTo('App\Comite');
    }

	public function majors()
    {
        return $this->belongsToMany('App\Major');   
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
