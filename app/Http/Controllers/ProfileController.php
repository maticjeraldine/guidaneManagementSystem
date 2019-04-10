<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


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
    public function show($id)
    {
        $profile = Profile::find($id);
        $profile->others = json_decode($profile->others, true);

        return view('/layouts/profile/show', compact('profile'));
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
        request()->validate([
            'first_name'    =>  ['required', 'string', 'max:255'],
            'middle_name'   =>  ['required', 'string', 'max:255'],
            'last_name'     =>  ['required', 'string', 'max:255'],
            'course'        =>  ['required', 'string', 'max:255'],
            'year'          =>  ['required'],
            'semester'      =>  ['required', 'string', 'max:255'],
            'gender'        =>  ['required', 'string', 'max:255'],
            'birth_date'    =>  ['required', 'string', 'max:255'],
            'birth_place'   =>  ['required', 'string', 'max:255'],
            'nationality'   =>  ['required', 'string', 'max:255'],
            'contact'       =>  ['required', 'string', 'max:255'],
            'address_city'  =>  ['required', 'string', 'max:255'],
            'address_provincial'  =>  ['required', 'string', 'max:255'],
            'others'        =>  ['required'],
            'role'          =>  ['required', 'string', 'max:255'],
            'email'         =>  ['required', 'string', 'email', 'max:255'],
            'password'      =>  ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = $file->getFilename().'.'.$extension;
            $file = File::get($file);
            Storage::disk('public')->put($fileName,  $file);

            $profile->image = $fileName;
        }

        $profile->id                 = $profile->id;
        $profile->first_name         = $request->first_name;
        $profile->middle_name        = $request->middle_name;
        $profile->last_name          = $request->last_name;
        $profile->course             = $request->course;
        $profile->year               = $request->year;
        $profile->semester           = $request->semester;
        $profile->gender             = $request->gender;
        $profile->birth_date         = $request->birth_date;
        $profile->birth_place        = $request->birth_place;
        $profile->nationality        = $request->nationality;
        $profile->contact            = $request->contact;
        $profile->address_city       = $request->address_city;
        $profile->address_provincial = $request->address_provincial;
        $profile->email              = $request->email;
        $profile->user_id            = $profile->user_id;
        $profile->others             = json_encode($request->others);
        
        $profile->save();
        
        return back()
            ->with('success', 'Profile has beeen updated!');
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
