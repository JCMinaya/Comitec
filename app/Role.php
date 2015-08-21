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

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
