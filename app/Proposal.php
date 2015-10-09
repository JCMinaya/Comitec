<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proposals';

    protected $fillable = ['subject', 'text'];

    public function user()
    {
        return $this->belongsTo('App\User', 'student_id');
    }

    public function comite()
    {
        return $this->belongsTo('App\Comite');
    }
}
