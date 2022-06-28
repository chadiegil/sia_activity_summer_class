@extends('base')
@section('content')
<h1>Welcome {{ auth()->user()->name }}</h1>
<hr>

@endsection
