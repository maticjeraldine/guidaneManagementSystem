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
        $violation = VIolation::find($id);

        $users = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->where('role', 'student')
            ->orderBy('last_name')
            ->get();

            return view('/layouts/violation/show', compact('violation', 'users'));
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

        $violation = Violation::find($id);

        dd($violation);
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
