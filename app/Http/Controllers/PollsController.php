<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;

class PollsController extends Controller
{
    public function index()
    {
        $polls = Poll::get();
        return view('polls', compact($polls));
    }
}
