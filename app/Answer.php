<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['answer'];

    public function poll()
    {
        return $this->belongsTo('App\Poll');
    }

    // public function question()
    // {
    //     return $this->belongsTo('App\Question');
    // }

}
