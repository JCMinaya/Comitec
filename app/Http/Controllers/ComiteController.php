<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comite;
use App\User;

class ComiteController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($name)
    {
        $comite = Comite::where('name', '=', $name)->get();
        // $comite['president'] = User::findOrFail($comite->president_id)->get();
        // $comite['vicepresident'] = User::findOrFail($comite->vicepresident_id)->get();
        // $comite['secretary'] = User::findOrFail($comite->secretary_id)->get();
        // $comite['vocal'] = User::findOrFail($comite->vocal_id)->get();
        // $comite['treasurer'] = User::findOrFail($comite->treasurer_id)->get();

        return view('pages.comite', $comite);
    }

}
