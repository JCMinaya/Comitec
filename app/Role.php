<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    protected $fillable = ['role_name'];

    public function users()
    {
        return $this->hasMany('App\User', 'student_id');
    }
}
