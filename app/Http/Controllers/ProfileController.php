<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    /**
     *  Display Student listing
     * 
     *  @param \App\Profile $profile
     *  @return \Illuminate\Http\Response
     */
    public function student() 
    {
        $students = DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->where('role', 'student')
        ->orderBy('last_name')
        ->get();

        return view('/layouts/profile/students', compact('students'));
    }

    /**
     *  Display Student listing
     * 
     *  @param \App\Profile $profile
     *  @return \Illuminate\Http\Response
     */
    public function studentShow($id) 
    {
        $profile = Profile::find($id);

        $violations = DB::table('violations')
        ->join('profile_violation', 'violations.id', '=', 'profile_violation.violation_id')
        ->where('profile_violation.profile_id', $profile->id)
        ->get();

        return view('/layouts/profile/student', compact('profile', 'violations'));
    }
}
