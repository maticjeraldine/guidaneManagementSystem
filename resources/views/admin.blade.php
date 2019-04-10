@extends('master')

@section('page_title')
Profile
@endsection

@section('content')
<div class="row justify-content-center student-profile">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                {{ __('Register') }}
                
                <a href="/profile/{{$profile->id}}" class="btn btn-info float-right text-white">
                    Edit
                </a>    
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="imgUp">
                            <div class="imagePreview">
                                <label class="btn btn-primary">
                                    Upload
                                    <input 
                                        class="uploadFile img" 
                                        name="image" 
                                        style="width: 0px;height: 0px;overflow: hidden;"
                                        type="file" 
                                        value="Upload Photo"
                                    >
                                </label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="w-100 text-center">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                            name="first_name" 
                                            placeholder="First Name" 
                                            type="type"
                                            value="{{$profile->first_name}}"
                                        >
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                            name="last_name" 
                                            placeholder="Last Name" 
                                            type="type"
                                            value="{{$profile->last_name}}"
                                        >
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input 
                                            type="type" 
                                            name="email" 
                                            placeholder="Email" 
                                            class="form-control text-center {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            value="{{$profile->email}}"
                                        >
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input 
                                            class="form-control text-center {{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                            name="contact" 
                                            placeholder="Contact" 
                                            type="type"
                                            value="{{$profile->contact}}"
                                        >
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('course') ? ' is-invalid' : '' }}"
                                            name="course" 
                                            placeholder="Course"
                                            type="type"
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
                </form>
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
            }
          
        });
    });
</script>
@endsection
