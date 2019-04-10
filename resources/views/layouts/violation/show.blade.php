@extends('master')

@section('page_title')
violation
@endsection

@section('content')
<div class="mb-5">
    <img src="/storage/{{$violation->image}}" alt="">
</div>

<div class="mb-5">
    <p>{{$violation->description}}</p>
</div>
@if(Auth::user()->role == "superadmin")

    <label for="#link-student">Link Student</label>
    <br>

    <div class="mb-2">
        @foreach($violators as $violator)
            <span class="btn btn-info text-white">
                {{$violator->last_name}}, {{$violator->first_name}} 
            </span>
        @endforeach
    </div>

    <form method="post" class="mb-5">
        @csrf

        <input type="hidden" name="violation_id" value="{{$violation->id}}">
        <select class="custom-select" id="link-student" name="user_id">
            <option value="" selected disabled>Link Student</option>
            @foreach($users as $user)
                <option 
                    value="{{$user->id}}"
                    @if(isset($user->class))
                        {{$user->class}}
                    @endif
                >
                    {{$user->last_name}}, {{$user->first_name}}
                </option>
            @endforeach
        </select>
    </form>
@endif
@endsection

@section('js')
<script type="text/javascript">
    $('select').on('change', function() {
        var value = $('select').get(0).value;
        var form = $('form').get(1);
        form.setAttribute("action", `/violation/update/${value}`);
        form.submit();
    });
</script>
@endsection
