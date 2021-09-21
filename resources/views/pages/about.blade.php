@extends('layouts.app')

@section('title','About us | '. config('app.name'))
 

@section('content')
<img src="{{ asset('images/about-us.png')}}" alt="About us Logo" class="my-12 rounded-full ">

        <h2 class="mb-5 text-gray-700">
              Built with <span class="text-pink-500"> &hearts; </span> by Attia Amir
            </h2>
        <p>
              <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">
              Revenir à la page d'accueil</a>
            </p>

        
             
  @endsection
