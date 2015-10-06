<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $polls = \App\Poll::where('comite_id', Auth::user()->comite_id)->get();
        $abrev = Auth::user()->comite->abreviation;
        $majors = \App\Major::all();

        return view('pages.dashboard.poll.polls', compact('polls', 'abrev', 'majors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $majors = \App\Major::all();

        return view('pages.dashboard.poll.new_poll', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $poll = new \App\Poll;
        $poll->title = $_POST['title'];
        $poll->description = $_POST['description'];
        $post->date = $_POST['date'];
        $post->end_date = $_POST['end_date'];
        $post->location = $_POST['location'];
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
        $poll = Poll::find($id);

        return view('pages.dashboard.poll.edit_poll', compact('poll'));
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
