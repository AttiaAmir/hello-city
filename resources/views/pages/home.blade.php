@extends('layouts.app')

@section('title',config('app.name'))

@section('content')
<img src="{{ asset('images/flag.png')}}" alt="Tunisia Flag" class="mt-12 rounded shadow-md h-32">

        <h1 class="mt-5 mb-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Tunisia !</h1>

        <p class="text-lg text-gray-800">it's currently {{date('h:i A')}}.</p>

        
             
    @endsection