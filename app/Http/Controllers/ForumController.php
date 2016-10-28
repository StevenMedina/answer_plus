<?php

namespace AnswerPLus\Http\Controllers;

use Illuminate\Http\Request;

use AnswerPLus\Http\Requests;

class ForumController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forum.index');
    }
}