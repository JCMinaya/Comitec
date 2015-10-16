<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comitees extends Model {

    protected $table = 'comite';

        protected $fillable = ['name', 'abreviacion', 'descripcion', 'email'];

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
