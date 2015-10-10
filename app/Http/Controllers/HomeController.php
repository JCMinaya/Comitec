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
        $major = \App\Major::find(Auth::user()->major_id);
        // dd($major);
        $publicPosts = \App\Post::where('public', 1)->get();
        $postsFilterByMajor = $major->posts()->get();
        $posts = $postsFilterByMajor->merge($publicPosts);

        // dd($posts);

        return view('pages.home', compact('comites', 'posts'));
    }

}
