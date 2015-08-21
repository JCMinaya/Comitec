<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'polls';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'duration', 'active'];

    public function comite()
    {
        return $this->belongsTo('App\Comite');
    }

	public function major()
    {
        return $this->belongsToMany('App\Major');
    }

}
