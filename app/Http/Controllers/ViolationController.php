<?php

namespace App\Http\Controllers;

use App\Violation;
use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ViolationController extends Controller
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
        $violations = Violation::all();

        return view('/layouts/violation/index', compact('violations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/layouts/violation/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required',
            'description' => 'required',
        ]);

        // $file = $request->file('image');
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $fileName = $image->getFilename().'.'.$extension;
        $image = File::get($image);
        $image = Storage::disk('public')->put($fileName,  $image);

        $image              = new Violation();
        $image->image        = $fileName;
        $image->description  = $request->description;
        $image->save();

        return back()
            ->with('success','Book added successfully...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $violation = Violation::find($id);
        $violators = DB::table('profile_violation')
            ->select(DB::raw('*'))
            ->join('profiles', 'profile_violation.profile_id', '=', 'profiles.id')
            ->where('violation_id', $id)
            ->get();

        $users = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->where('role', 'student')
            ->orderBy('last_name')
            ->get();

        $violatorIDs = [];
        foreach ($violators as $violator) {
            array_push($violatorIDs, $violator->profile_id);
        }

        foreach ($users as $user) {
            if(in_array($user->id, $violatorIDs)) {
                $user->class = "disabled";
            }
        }

        return view('/layouts/violation/show', compact('violation', 'users', 'violators'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function edit(Violation $violation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'violation_id'=>'required',
            'user_id'=> 'required'
        ]);

        $profile = Profile::find($request->get('user_id'));

        // $violation->profile()->attach($request->get('violation_id'));
        $profile->violation()->attach($request->get('violation_id'));
        return back()
            ->with('success','Linking Stundent...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Violation $violation)
    {
        //
    }
}
