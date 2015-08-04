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

    protected $fillable = ['name', 'type_id', 'president_id', 'vicepresident_id', 'secretary_id', 'vocal_id', 'treasurer_id'];

}
