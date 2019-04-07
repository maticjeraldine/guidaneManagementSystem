@extends('master')

@section('page_title')
Profile
@endsection

@section('content')

@if (Auth::user()->role === 'admin')
    <h1>hi</h1> {{Auth::user()->role}}
    <!-- include profile admin here -->
@else
    <!-- include profile student here -->
	awawaw
@endif
<h1>this is Profile page</h1>
@endsection

@section('js')
<script type="text/javascript">
	// alert('asdasd');
</script>
@endsection
