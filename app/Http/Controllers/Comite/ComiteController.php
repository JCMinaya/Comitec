<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use App\Proposal;
use App\Comite;
use App\Major;
use App\User;
use Auth;

class ComiteController extends Controller 
{
    public static function getComite($abrev)
    {
        return Comite::where('abreviation', $abrev)->first();
    }

    public function showDashboard($abrev)
    {
        $comite = $this->getComite($abrev);
        $members = $comite->users;
        // dd($members);

        return view('pages.dashboard.index', compact('comite', 'members'));
    }

    public function showComitePosts($abrev)
    {
        // Get comite from request
        $comite = $this->getComite($abrev);

        if(Auth::check())
        {
            // Get filter posts for authenticated user
            $user = Auth::user();
            $major = Major::find($user->major_id);
            $postsFilterByMajor = $major->posts()->where('comite_id', $comite->id)
                                    ->orderBy('created_at')->get();

            $postsPublic = \App\Post::where('public', 1)
                              ->where('comite_id', $comite->id)
                              ->orderBy('created_at')->get();
            $posts = $postsFilterByMajor->merge($postsPublic);
        }else{
            $posts = \App\Post::where('public', 1)
                              ->where('comite_id', $comite->id)
                              ->orderBy('created_at')->get();
        }
        $members = User::where('comite_id', $comite->id)
                        ->where('member', 1)->get();

        return view('pages.comite', compact('comite', 'posts', 'members', 'abrev'));
    }

    public function showMessages($abrev){
        $comite = $this->getComite($abrev);
        $proposals = $comite->proposals;
        // dd($proposals); 

        return view('pages.dashboard.messages', compact('proposals'));
    }

   

}
