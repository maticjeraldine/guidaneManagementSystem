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
                <div class="row">
                    <div class="imgUp">
                        <div class="imagePreview overflow-hidden">
                            <img src="/storage/{{$profile->image}}" alt="">
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="w-100 text-center">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <span class="form-control">{{$profile->first_name}}</span>
                                </div>
                                <div class="col-md-4 form-group">
                                    <span class="form-control">{{$profile->middle_name}}</span>
                                </div>
                                <div class="col-md-4 form-group">
                                    <span class="form-control">{{$profile->last_name}}</span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <span class="form-control">{{$profile->email}}</span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <span class="form-control">{{$profile->contact}}</span>
                                </div>
                                <div class="col-md-4 form-group">
                                    <span class="form-control">{{$profile->course}}</span>
                                </div>
                                <div class="col-md-4 form-group">
                                    <span class="form-control">{{$profile->year}}</span>
                                </div>
                                <div class="col-md-4 form-group">
                                    <span class="form-control">{{$profile->semester}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row violation">
                    @if(count($violations) > 0)

                        <div class="d-block w-100">
                            <h2 class="text-center text-uppercase">violations:</h2>
                        </div>
                            @foreach($violations as $violation)
                            <div class="card col-md-4 child-card">
                                <img class="card-img-top" src="/storage/{{$violation->image}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$violation->description}}
                                    </p>
                                    <a href="/violation/show/{{$violation->violation_id}}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="d-block w-100">
                            <h2 class="text-center text-uppercase">no violations</h2>
                        </div>
                    @endif
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
            }
          
        });
    });
</script>
@endsection
