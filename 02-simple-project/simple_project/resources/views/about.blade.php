@extends('layout.app')

@section('content')

<h1>About</h1>
<p>We are who we are!</p>

@endsection


@section('sidebar')
    @parent
    <p>This is appended to the sidebar!</p>
@endsection