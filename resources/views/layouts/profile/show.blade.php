@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/profile/{{$profile->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        
                        <div class="student-form">
                            <div class="row">
                                <div class="imgUp overflow-hidden">
                                    <div class="imagePreview">
                                        <img src="/storage/{{$profile->image}}" alt="Profile Image" class="profile-image">
                                        <label class="btn btn-primary">
                                            Upload
                                            <input 
                                                class="uploadFile img" 
                                                name="image" 
                                                style="width: 0px;height: 0px;overflow: hidden;"
                                                type="file" 
                                                value="{{$profile->image}}"
                                            >
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="w-100 text-center">
                                        <span>Please complete to create an account</span>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <input 
                                                    class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                                    name="first_name" 
                                                    placeholder="First Name" 
                                                    type="type"
                                                    value="{{$profile->first_name}}"
                                                >
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input 
                                                    class="form-control {{ $errors->has('middle_name') ? ' is-invalid' : '' }}"
                                                    name="middle_name" 
                                                    placeholder="Middle Name" 
                                                    type="type"
                                                    value="{{$profile->middle_name}}"
                                                >
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input 
                                                    class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                                    name="last_name" 
                                                    placeholder="Last Name" 
                                                    type="type"
                                                    value="{{$profile->last_name}}"
                                                >
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input 
                                                    type="type" 
                                                    name="course" 
                                                    placeholder="Course" 
                                                    class="form-control {{ $errors->has('course') ? ' is-invalid' : '' }}"
                                                    value="{{$profile->course}}"                                                    
                                                >
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input 
                                                    class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}"
                                                    name="year" 
                                                    placeholder="Year" 
                                                    type="type"
                                                    value="{{$profile->year}}"
                                                >
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input 
                                                    class="form-control {{ $errors->has('semester') ? ' is-invalid' : '' }}"
                                                    name="semester" 
                                                    placeholder="Semester"
                                                    type="type"
                                                    value="{{$profile->semester}}"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 form-group pl-0">
                                    <input
                                        class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                        name="gender" 
                                        placeholder="Gender" 
                                        type="type"
                                        value="{{$profile->gender}}"
                                    >
                                </div>
                                <div class="col-md-3 form-group">
                                    <input 
                                        class="form-control {{ $errors->has('birth_date') ? ' is-invalid' : '' }}"
                                        name="birth_date" 
                                        placeholder="Date of Birth" 
                                        type="type"
                                        value="{{$profile->birth_date}}"
                                    >
                                </div>
                                <div class="col-md-3 form-group">
                                    <input
                                        class="form-control {{ $errors->has('birth_place') ? ' is-invalid' : '' }}"
                                        name="birth_place" 
                                        placeholder="Place of Birth" 
                                        type="type"
                                        value="{{$profile->birth_place}}"
                                    >
                                </div>
                                <div class="col-md-3 form-group pr-0">
                                    <input
                                        class="form-control {{ $errors->has('nationality') ? ' is-invalid' : '' }}"
                                        name="nationality" 
                                        placeholder="Nationality" 
                                        type="type"
                                        value="{{$profile->nationality}}"
                                    >
                                </div>
                                <div class="col-md-3 form-group pl-0">
                                    <input
                                        class="form-control {{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                        name="contact" 
                                        placeholder="Contact No." 
                                        type="type"
                                        value="{{$profile->contact}}"
                                    >
                                </div>
                                <div class="col-md-3 form-group ">
                                    <input
                                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" 
                                        placeholder="Email Address" 
                                        type="type"
                                        value="{{$profile->email}}"
                                    >
                                </div>
                                <div class="col-md-3 form-group ">
                                    <input
                                        class="form-control {{ $errors->has('address_city') ? ' is-invalid' : '' }}"
                                        name="address_city" 
                                        placeholder="City Address" 
                                        type="type"
                                        value="{{$profile->address_city}}"
                                    >
                                </div>
                                <div class="col-md-3 form-group pr-0">
                                    <input
                                        class="form-control {{ $errors->has('address_provincial') ? ' is-invalid' : '' }}"
                                        name="address_provincial" 
                                        placeholder="Provincial Address" 
                                        type="type"
                                        value="{{$profile->address_provincial}}"
                                    >
                                </div>
                            </div>

                            <div class="row">
                                <table class="table table-bordered">
                                <thead class="text-uppercase text-center">
                                    <tr>
                                        <th scope="col">Level</th>
                                        <th scope="col">School</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Exclusive Date</th>
                                        <th scope="col">Awards</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row text-uppercase">
                                                Elementary
                                            </th>
                                            <td>
                                                <input
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['elementary']['school']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'elementary'"]["'school'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['elementary']['location']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'elementary'"]["'location'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['elementary']['date']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'elementary'"]["'date'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['elementary']['awards']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'elementary'"]["'awards'"]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row text-uppercase">
                                                Secondary
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['secondary']['school']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'secondary'"]["'school'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['secondary']['location']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'secondary'"]["'location'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['secondary']['date']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'secondary'"]["'date'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['secondary']['awards']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'secondary'"]["'awards'"]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row text-uppercase">
                                                College
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['college']['school']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'college'"]["'school'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['college']['location']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'college'"]["'location'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['college']['date']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'college'"]["'date'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['college']['awards']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'college'"]["'awards'"]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row text-uppercase">
                                                Vocational
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['vocational']['school']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'vocational'"]["'school'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['vocational']['location']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'vocational'"]["'location'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['vocational']['date']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'vocational'"]["'date'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['education']['vocational']['awards']" 
                                                    type="type"
                                                    value="{{$profile->others["'education'"]["'vocational'"]["'awards'"]}}"
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">
                                                <span class="text-uppercase">
                                                    hobbies and interest
                                                </span>
                                            </th>
                                            <th scope="col">
                                                <span class="text-uppercase">
                                                    dreams and aspiration
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['hobbies_interest'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'hobbies_interest'"][0]}}"
                                                >
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['dreams_aspiration'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'dreams_aspiration'"][0]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['hobbies_interest'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'hobbies_interest'"][1]}}"
                                                >
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['dreams_aspiration'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'dreams_aspiration'"][1]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['hobbies_interest'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'hobbies_interest'"][2]}}"
                                                >
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['dreams_aspiration'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'dreams_aspiration'"][2]}}"
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <table class="table table-bordered">
                                    <thead class="text-center text-uppercase">
                                        <tr>
                                            <th></th>
                                            <th>
                                                <span>mother</span>
                                            </th>
                                            <th>
                                                <span>father</span>
                                            </th>
                                            <th>
                                                <span>guardian</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="text-uppercase text-center">
                                                <span>name</span>
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['mother']['name']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'mother'"]["'name'"]}}"                                                    
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['father']['name']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'father'"]["'name'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['guardian']['name']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'guardian'"]["'name'"]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-center">
                                                <span>address</span>
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['mother']['address']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'mother'"]["'address'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['father']['address']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'father'"]["'address'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['guardian']['address']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'guardian'"]["'address'"]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-center">
                                                <span>contact no.</span>
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['mother']['contact']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'mother'"]["'contact'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['father']['contact']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'father'"]["'contact'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['guardian']['contact']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'guardian'"]["'contact'"]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-center">
                                                <span>occupation</span>
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['mother']['occupation']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'mother'"]["'occupation'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['father']['occupation']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'father'"]["'occupation'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['guardian']['occupation']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'guardian'"]["'occupation'"]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-center">
                                                <span>birth date</span>
                                            </th>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['mother']['birth_date']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'mother'"]["'birth_date'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['father']['birth_date']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'father'"]["'birth_date'"]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['guardian']['guardian']['birth_date']" 
                                                    type="type"
                                                    value="{{$profile->others["'guardian'"]["'guardian'"]["'birth_date'"]}}"
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <table class="table table-bordered">
                                    <thead class="text-uppercase text-center">
                                        <tr>
                                            <th>
                                                <span>name of sibling</span>
                                            </th>
                                            <th>
                                                <span>date of birth</span>
                                            </th>
                                            <th>
                                                <span>education</span>
                                            </th>
                                            <th>
                                                <span>occupation</span>
                                            </th>
                                            <th>
                                                <span>school/employer</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['name'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'name'"][0]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['birth_date'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'birth_date'"][0]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['education'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'education'"][0]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['occupation'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'occupation'"][0]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['school'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'school'"][0]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['name'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'name'"][1]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['birth_date'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'birth_date'"][1]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['education'][]"
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'education'"][1]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['occupation'][]"
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'occupation'"][1]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['school'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'school'"][1]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['name'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'name'"][2]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['birth_date'][]" 
                                                    type="type" 
                                                    value="{{$profile->others["'sibling'"]["'birth_date'"][2]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['education'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'education'"][2]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['occupation'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'occupation'"][2]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['school'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'school'"][2]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['name'][]"
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'name'"][3]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['birth_date'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'birth_date'"][3]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['education'][]"
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'education'"][3]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['occupation'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'occupation'"][3]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['school'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'school'"][3]}}"
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['name'][]"
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'name'"][4]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['birth_date'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'birth_date'"][4]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['education'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'education'"][4]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['occupation'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'occupation'"][4]}}"
                                                >
                                            </td>
                                            <td>
                                                <input 
                                                    class="form-control border-0 bg-transparent"
                                                    name="others['sibling']['school'][]" 
                                                    type="type"
                                                    value="{{$profile->others["'sibling'"]["'school'"][4]}}"
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <input type="hidden" name="role" value="student">
                            
                            <div class="row">
                                <div class="col-md-6 form-group pl-0">
                                    <input 
                                        class="form-control"
                                        name="password" 
                                        placeholder="Password" 
                                        type="password"
                                        value="{{$profile->password}}"
                                    >
                                </div>
                                <div class="col-md-6 form-group pr-0">
                                    <input 
                                        class="form-control"
                                        name="password_confirmation" 
                                        placeholder="Confirm Password" 
                                        type="password"
                                        value="{{$profile->password}}"
                                    >
                                </div>
                            </div>

                            <div class="w-100 text-center">
                                <button type="submit" class="btn btn-primary d-inline">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">

    $(".imgAdd").click(function(){
      $(this)
        .closest(".row")
        .find('.imgAdd')
        .before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
    });

    $(document).on("click", "i.del" , function() {
        $(this).parent().remove();
    });

    $(function() {
        $(document).on("change",".uploadFile", function()
        {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
     
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
     
                reader.onloadend = function(){ // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
                $('img.profile-image').remove();
            }
          
        });
    });
</script>
@endsection
