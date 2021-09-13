@extends('app')

@section('title','About us | '. config('app.name'))
 

@section('content')
<img src="/images/About.jpg" alt="About us Logo">

        <p>Built with &hearts; by Attia Amir</p>
        <p><a href={{ route('home') }}>Revenir à la page d'accueil</a></p>

        
             
  @endsection
