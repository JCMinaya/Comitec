<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proposal;
use App\Comite;
use Auth;

class ComiteController extends Controller
{
    public static function getComite($abrev)
    {
        return Comite::where('abreviation', $abrev)->first();
    }

    public function showDashboard($abrev){
        $comite = $this->getComite($abrev);
        $members = $comite->users();
        // dd($members);

        return view('pages.dashboard.index', compact('comite', 'members'));
    }

    public function showComitePosts($abrev)
    {
        // Get comite from request
        $comite = $this->getComite($abrev);

        // Get filter posts for authenticated user
        $user = Auth::user();
        $major = $user->major_id;
        $posts = $major->posts()->where('comite_id', $comite->id)
                              ->orderBy('created_by');

        return view('pages.comite', compact('comite'));
    }

    public function showMessages($abrev){
        $comite = $this->getComite($abrev);
        $proposals = $comite->proposals;
        // dd($proposals); 

        return view('pages.dashboard.messages', compact('proposals'));
    }

}
