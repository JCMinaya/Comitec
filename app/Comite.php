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

}
