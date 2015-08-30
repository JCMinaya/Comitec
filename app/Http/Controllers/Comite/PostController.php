<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = \App\Post::where('comite_id', Auth::user()->comite_id)->get();
        $abrev = Auth::user()->comite->abreviation;
        // dd($posts);
        return view('pages.dashboard.posts', compact('posts', 'abrev'));
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
        
        return view('pages.dashboard.post_form', compact('majors', 'abrev'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $post = new \App\Post;
        $post->comite_id = Auth::user()->comite_id;
        $post->title = $_POST['title'];
        $post->description = $_POST['description'];
        $post->event_date = $_POST['date'];
        $post->save();
        $post->majors()->sync($_POST['majors'], $post->id, false);

        return redirect()->route('post.index', $request->abrev);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
