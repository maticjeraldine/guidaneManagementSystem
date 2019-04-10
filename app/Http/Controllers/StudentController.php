<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
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

    public function index() 
    {
        $profile = Profile::find(Auth::user()->id);

        $violations = DB::table('violations')
        ->join('profile_violation', 'violations.id', '=', 'profile_violation.violation_id')
        ->where('profile_violation.profile_id', Auth::user()->id)
        ->get();

        return view('/layouts/student/index', compact('profile', 'violations'));
    }
}
