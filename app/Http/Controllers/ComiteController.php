<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proposal;
use App\Comite;

class ComiteController extends Controller
{
    
    public static function getComite($abrev)
    {
        return Comite::where('abreviation', $abrev)->first();
    }

    public function showComite($abrev)
    {
        $comite = $this->getComite($abrev);

        return view('pages.comite.index', compact('comite'));
    }

    public function showDashboard($abrev){
        $comite = $this->getComite($abrev);
        $proposals = $comite->proposals;

        return view('pages.comite.dashboard', compact('comite', 'proposals'));
    }

}
