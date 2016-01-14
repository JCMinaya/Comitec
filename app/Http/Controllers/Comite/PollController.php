<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Poll;
use DB;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($abrev)
    {
        $polls = \App\Poll::where('comite_id', Auth::user()->comite_id)->get();
        $majors = \App\Major::all();
        
        $votes = collect(DB::select('SELECT pr.poll_id, pr.answer, count(pr.answer_id) as cant from poll_results pr 
                                        group by pr.poll_id, pr.answer_id'));

        return view('pages.dashboard.poll.polls', compact('polls', 'abrev', 'majors', 'votes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $majors = \App\Major::all();
        $abrev = Auth::user()->comite->abreviation;

        return view('pages.dashboard.poll.new_poll', compact('majors', 'abrev'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $options = [];
        $poll = new \App\Poll;
        $poll->comite_id = Auth::user()->comite_id;
        $poll->question = $_POST['question'];
        $poll->active = 1;

        // Setting if accepts multiple answers
        if(isset($_POST['multiple_answers']))
            $poll->multiple = 1;

        // Setting answer type (free answer or predefined options)
        if(isset($_POST['answer_type']))
            $poll->free_answer = 1;
        else{
            for ($i=0; $i < 10; $i++) { 
                if($request->input('option_'.$i))
                    array_push($options, $request->input('option_'.$i));
            }
        }

        // Assigning poll majors visibility
        if(isset($_POST['public']))
            $poll->public = 1;
        else
            $poll->public = 0;

        $poll->save();

        // Storing options on answers table
        if($options)
        {
            foreach ($options as $option) {
                $answer = new \App\Answer;
                $answer->poll_id = $poll->id;
                $answer->answer = $option;
                $answer->save();
            }
        }

        if(!(isset($_POST['public'])))
            $poll->majors()->sync($_POST['majors'], $poll->id, false);

        return redirect()->route('poll.index', $request->abrev);
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
        $poll = Poll::find($id);
        $majors = \App\Major::all();

        return view('pages.dashboard.poll.edit_poll', compact('poll', 'abrev', 'majors'));
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
        $options = [];
        $poll = Poll::find($id);

        //Deleting old answers
        $old_answers = $poll->answers;
        foreach ($old_answers as $old_answer)
            \App\Answer::destroy($old_answer->id);

        // Assigning new values
        $poll->comite_id = Auth::user()->comite_id;
        $poll->question = $_POST['question'];

        // Setting if accepts multiple answers
        if(isset($_POST['multiple_answers']))
            $poll->multiple = 1;

        // Setting answer type (free answer or predefined options)
        if(isset($_POST['answer_type']))
            $poll->free_answer = 1;
        else{
            for ($i=0; $i < 10; $i++) { 
                if($request->input('option_'.$i))
                    array_push($options, $request->input('option_'.$i));
            }
        }

        // Assigning poll majors visibility
        if(isset($_POST['public']))
            $poll->public = 1;

        $poll->save();

        // Storing options on answers table
        if($options)
        {
            foreach ($options as $option) {
                $answer = new \App\Answer;
                $answer->poll_id = $poll->id;
                $answer->answer = $option;
                $answer->save();
            }
        }

        if(!(isset($_POST['public'])))
            $poll->majors()->sync($_POST['majors'], $poll->id, false);

        return redirect()->route('poll.index', $request->abrev);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($abrev, $id)
    {
        Poll::destroy($id);

        return redirect()->route('poll.index', $abrev);
    }

    public function store_result(Request $request, $abrev, $id)
    {
        $poll_result = new \App\Poll_Result;
        $poll_result->student_id = Auth::user()->id;
        $poll_result->poll_id = $id;

        $poll = Poll::find($id);
        // dd($poll);
        if($poll->free_answer){
            $poll_result->answer = (string) $_POST['free_answer'];
            // dd($_POST['free_answer']);
        }
        else if($poll->multiple)
        {
            $checkboxes = $_POST['optionsCheckboxes'];
            $checkboxesResult = implode(', ', $checkboxes);
            $poll_result->answer = $checkboxesResult;
        }
        else{
            $poll_result->answer = \App\Answer::find($_POST['optionRadio'])->answer;
            $poll_result->answer_id = $_POST['optionRadio'];
        }

        $poll_result->save();

        // $poll = (array) $poll;
        return back();
    }
}
