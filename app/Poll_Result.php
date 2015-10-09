<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll_Result extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'poll_results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['poll_id', 'student_id', 'answer_id'];

}
