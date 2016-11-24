<?php

namespace AnswerPLus\Http\Controllers;

use DB;
use Auth;
use AnswerPLus\User;
use Illuminate\Http\Request;

use AnswerPLus\Http\Requests;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('Category')->get();

        return view('categories.index', compact('categories'));
    }

    public static function getCategorieById($id)
    {
    	# code...
    }

    public function create(Request $request)
    {
    	# code...
    }
}
