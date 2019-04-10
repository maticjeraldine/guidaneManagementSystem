<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $error = Validator::make($data, [
            // 'image'         => isset($data['middle_name']) 
            //                     ? ['required', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']
            //                     : [],
            'image'         => isset($data['middle_name']) ? ['required'] : [],
            'first_name'    => ['required', 'string', 'max:255'],
            'middle_name'   => isset($data['middle_name']) ? ['required', 'string', 'max:255'] : [],
            'last_name'     => ['required', 'string', 'max:255'],
            'course'        => isset($data['course']) ? ['required', 'string', 'max:255'] : [],
            'year'          => isset($data['year']) ? ['required'] : [],
            'semester'      => isset($data['semester']) ? ['required', 'string', 'max:255'] : [],
            'gender'        => isset($data['gender']) ? ['required', 'string', 'max:255'] : [],
            'birth_date'    => isset($data['birth_date']) ? ['required', 'string', 'max:255'] : [],
            'birth_place'   => isset($data['birth_place']) ? ['required', 'string', 'max:255'] : [],
            'nationality'   => isset($data['nationality']) ? ['required', 'string', 'max:255'] : [],
            'contact'       => isset($data['contact']) ? ['required', 'string', 'max:255'] : [],
            'address_city'  => isset($data['address_city']) ? ['required', 'string', 'max:255'] : [],
            'address_provincial'  => isset($data['address_provincial']) ? ['required', 'string', 'max:255'] : [],
            'others'        => isset($data['address_provincial']) ? ['required'] : [],
            'role'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        return $error;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'email'     => $data['email'],
            'role'      => $data['role'],
            'password'  => Hash::make($data['password']),
        ]);

        $profile = Profile::create([
            'image'             => isset($data['image']) ? $data['image'] : null,
            'first_name'        => $data['first_name'],
            'middle_name'       => isset($data['middle_name']) ? $data['middle_name'] : null,
            'last_name'         => $data['last_name'],
            'course'            => isset($data['course']) ? $data['course'] : null,
            'year'              => isset($data['year']) ? $data['year'] : null,
            'semester'          => isset($data['semester']) ? $data['semester'] : null,
            'gender'            => isset($data['gender']) ? $data['gender'] : null,
            'birth_date'        => isset($data['birth_date']) ? $data['birth_date'] : null,
            'birth_place'       => isset($data['birth_place']) ? $data['birth_place'] : null,
            'nationality'       => isset($data['nationality']) ? $data['nationality'] : null,
            'contact'           => isset($data['contact']) ? $data['contact'] : null,
            'address_city'      => isset($data['address_city']) ? $data['address_city'] : null,
            'address_provincial' => isset($data['address_provincial']) ? $data['address_provincial'] : null,
            'email'             => $data['email'],
            'user_id'           => $user->id,
            'others'            => isset($data['others']) ? json_encode($data['others']) : null,
        ]);

        return $user;
    }
}
