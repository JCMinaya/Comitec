<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $majors = \App\Major::all();
        $major_ids = array();
        $major_names = array();
        $abrev = $request->abrev;

        foreach ($majors as $major) {
            array_push($major_ids, $major->id);
            array_push($major_names, $major->name);
        }
        
        return view('pages.comite.post_form', compact('major_ids', 'major_names', 'abrev'));
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
        $post->title = $_POST['title'];
        $post->description = $_POST['description'];
        $post->event_date = $_POST['event_date'];
        $post->save();
        $post->majors()->sync($_POST['majors'], $post->id, false);
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
