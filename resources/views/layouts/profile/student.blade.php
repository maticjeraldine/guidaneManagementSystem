@extends('master')

@section('page_title')
student
@endsection

@section('content')
<div class="mb-5">
    <img src="/storage/{{$student->image}}" alt="">
</div>

<div class="mb-5">
    <p>{{$student->first_name}} {{$student->last_name}}</p>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $('select').on('change', function() {
        var value = $('select').get(0).value;
        var form = $('form').get(1);
        form.setAttribute("action", `/student/update/${value}`);
        form.submit();
    });
</script>
@endsection
