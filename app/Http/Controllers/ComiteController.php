<?php

namespace App\Http\Controllers;

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

    public function showComitePosts($abrev)
    {
        // Get comite from request
        $comite = $this->getComite($abrev);

        // Get filter posts for authenticated user
        $user = Auth::user();
        $major = $user->major_id;
        $posts = $major->posts()->where('comite_id', $comite->id)
                              ->orderBy('created_by');
        // $posts = $user->posts()->where('comite_id', $comite->id)
        //                        ->where('major_id', $user->major_id)
        //                        ->orderBy('created_at'); 

        return view('pages.comite.index', compact('comite'));
    }

    public function showDashboard($abrev){
        $comite = $this->getComite($abrev);
        $proposals = $comite->proposals;

        return view('pages.comite.dashboard', compact('comite', 'proposals'));
    }

    public function showPostForm()
    {
        $majors = \App\Major::all();
        return view('pages.comite.post_form', compact('majors'));
    }

    public function createPost()
    {
        // echo($_POST['title']);

        $post = new \App\Post;
        $post->title = $_POST['title'];
        $post->description = $_POST['description'];
        $post->event_date = $_POST['event_date'];
        $post->location = $_POST['location'];
        $post->save();
        $post->majors()->sync($_POST['majors'], $post->id, false);

    }

}
