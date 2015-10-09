<?php

namespace App\Http\Controllers\Comite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messages = \App\Proposal::all();
        

        return view('pages.dashboard.messages', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $message = new \App\Proposal;
        $message->subject = $_POST['about'];
        $message->text = $_POST['message'];
        $message->comite_id = $request->abrev;
        $message->student_id = Auth::user()->id;
        $message->save();

        return redirect()->route('comite.posts', $request->abrev);
    }
}
