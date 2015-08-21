<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comite';

    protected $fillable = ['name', 'abreviacion', 'descripcion'];

    public function major()
    {
        return $this->belongsTo('App\Major');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function proposals()
    {
        return $this->hasMany('App\Proposal');
    }
}
