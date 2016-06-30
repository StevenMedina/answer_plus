<?php

namespace trainingPlus\Http\Controllers;

use DB;
use trainingPlus\User;
use Illuminate\Http\Request;
use trainingPlus\Http\Requests;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        foreach ($users as $user) {
            if ( !empty( $user->name ) ) {
                return view('user.index', compact('users'));
            }
        }

        $data = array("message" => "No hay usuarios en este momento registrados");
        return view('user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        // DB::table('users')->insert($request->all());

        DB::table('users')->insert([
            'name'          => $request->name,
            'user'          => $request->user,
            'password'      => bcrypt($request->password),
            'email'         => $request->email,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            '_token'        => $request->_token
        ]);

        return view('user.show', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
