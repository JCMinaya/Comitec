<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $comites = \App\Comite::all();
        $posts = \App\Post::where('public', 1)->get();
        if(Auth::check()){
            $major = \App\Major::find(Auth::user()->major_id);
            $postsFilterByMajor = $major->posts()->get();
            $posts = $postsFilterByMajor->merge($posts);
        }

        // dd($posts);

        return view('pages.home', compact('comites', 'posts'));
    }

}
