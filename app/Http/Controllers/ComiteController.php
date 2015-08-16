<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comite;
use App\User;

class ComiteController extends Controller
{
    
    public function getComite($name)
    {
        $comite = Comite::where('name', '=', $name)->first();
        // $president = User::findOrFail($comite->president_id);
        // $vicepresident = User::findOrFail($comite->vicepresident_id);
        // $secretary = User::findOrFail($comite->secretary_id);
        // $vocal = User::findOrFail($comite->vocal_id);
        // $treasurer = User::findOrFail($comite->treasurer_id);

        return view('pages.comite', compact('comite', 'president', 'vicepresident', 'secretary', 'vocal', 'treasurer'));
    }

}
