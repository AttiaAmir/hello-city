@extends('app')

@section('title',config('app.name'))

@section('content')

        <h1>Hello from Tunisia </h1>

        <p>it's currently {{date('h:i A')}}.</p>

        
             
    @endsection