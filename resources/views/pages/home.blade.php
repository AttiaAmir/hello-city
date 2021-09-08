@extends('app')

@section('title')
Hello City 
@endsection
@section('content')

        <h1>Hello from Tunisia </h1>

        <p>it's currently {{date('h:i A')}}.</p>

        
             
    @endsection