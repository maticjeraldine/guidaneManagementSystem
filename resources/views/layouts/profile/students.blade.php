@extends('master')

@section('page_title')
Students
@endsection

@section('content')
<h1>Student List</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $key => $student)
            <tr>

                <th>{{$key + 1}}</th>
                <th>{{$student->last_name}}, {{$student->first_name}}</th>
                <th>
                    <a href="/student/show/{{$student->id}}">view</a>
                </th>
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
