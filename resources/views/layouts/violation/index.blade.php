@extends('master')

@section('page_title')
violation
@endsection

@section('content')
<a href="/violation/create" class="link-untyled">
    <button type="button" class="btn btn-primary">
        Create Violation
    </button>
</a>
<table class="table table-hover">
    <thead>
      <th>Image</th>
      <th>Description</th>
      <th>Action</th>
    </thead>

    <tbody>
		@foreach($violations as $violation)
		        <tr>
		          	<td>
                        <img src="/storage/{{$violation->image}}" alt="">
	              	</td>
		          	<td>{{$violation->description}}</td>
                    <td>
                        <a href="/violation/show/{{$violation->id}}">view</a>
                    </td>
		        </tr>
		@endforeach
    </tbody>
</table>
@endsection
