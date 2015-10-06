<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($abrev)
    {
        $posts = \App\Post::where('comite_id', Auth::user()->comite_id)->get();
        $comite = Auth::user()->comite;
        
        return view('pages.dashboard.post.posts', compact('posts', 'comite', 'abrev'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $majors = \App\Major::all();
        $abrev = $request->abrev;
        
        return view('pages.dashboard.post.new_post', compact('majors', 'abrev'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, $abrev)
    {
        $post = new \App\Post;
        $post->comite_id = Auth::user()->comite_id;
        $post->title = $_POST['title'];
        $post->description = $_POST['description'];
        $post->date = $_POST['date'];
        $post->end_date = $_POST['end_date'];
        if(isset($_POST['public']))
        {
            $post->public = 1;
        }
        $post->save();
        if(!(isset($_POST['public'])))
        {
            $post->majors()->sync($_POST['majors'], $post->id, false);
        }

        return redirect()->route('post.index', $abrev);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($abrev, $id)
    {
        $post = Post::find($id);
        $majors = \App\Major::all();

        return view('pages.dashboard.post.edit_post', compact('post', 'majors', 'abrev'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $abrev, $id)
    {
        $post = Post::find($id);
        $post->comite_id = Auth::user()->comite_id;
        $post->title = $_POST['title'];
        $post->description = $_POST['description'];
        $post->date = $_POST['date'];
        $post->end_date = $_POST['end_date'];
        if(isset($_POST['public']))
        {
            $post->public = 1;
        }
        $post->save();
        if(!(isset($_POST['public'])))
        {
            $post->majors()->sync($_POST['majors'], $post->id, false);
        }

        return redirect()->route('post.index', $abrev);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
    }

}
