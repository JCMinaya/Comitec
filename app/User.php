<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'last_name', 'email', 'password', 'genre', 'member'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function role()
    {
        return $this->hasOne('App\Role', 'student_id');
    }

    public function comite()
    {
        return $this->belongsTo('App\Comite');
    }

    public function proposal()
    {
        return $this->hasMany('App\Proposal', 'student_id');
    }   

    public function comments()
    {
        return $this->hasMany('App\Comment', 'student_id');
    }

    public function major()
    {
        return $this->belongsTo('App\Major');
    }
}