<?php

namespace App\Http\Controllers;
use  App\Poll;
use Illuminate\Http\Request;

class ApiPollController extends Controller
{
    public function index()
    {
        $polls = Poll::where('user_id', \Auth::id())->get();
        return response()->json($polls);
    }
}
