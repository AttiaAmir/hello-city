@extends('app')

@section('title','About us | '. config('app.name'))
 

@section('content')
<img src="{{ asset('images/about-us.png')}}" alt="About us Logo">

        <p>Built with &hearts; by Attia Amir</p>
        <p><a href={{ route('home') }}>Revenir à la page d'accueil</a></p>

        
             
  @endsection
