<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function showProfile($id) {
        $user = User::findOrFail($id);
        return view('pages.user', $user);
    }
}
