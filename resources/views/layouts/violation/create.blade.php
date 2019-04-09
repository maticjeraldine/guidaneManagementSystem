@extends('master')

@section('page_title')
violation
@endsection

@section('content')
<div class="card uper">
    <div class="card-header">
        Create Violation
    </div>
    <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
    @endif
        <form method="post" action="/violation/store" enctype="multipart/form-data">
            @csrf
            <div class="imgUp w-100">
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

            <div class="form-group row">
                <label 
                    for="description" 
                    class="col-md-10 m-auto col-form-label text-left"
                >
                    {{ __('Description') }}
                </label>

                <div class="col-md-10 m-auto">
                    <textarea 
                        name="description"
                        class="for-name form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                        value="{{ old('description') }}" 
                        rows="3"></textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- <input type="hidden" name="role" value="admin"> -->

            <div class="w-100 text-center">
                    <button type="submit" class="btn btn-primary d-inline">
                        {{ __('Register') }}
                    </button>
            </div>
        </form>
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