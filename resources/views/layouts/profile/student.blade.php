@extends('master')

@section('page_title')
Students
@endsection

@section('content')
<h1>Student List</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>

                <th>{{$student->id}}</th>
                <th>{{$student->last_name}}, {{$student->first_name}}</th>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('js')
<script type="text/javascript">
	// alert('asdasd');
</script>
@endsection
