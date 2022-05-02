@extends('template')

@section('content')
       <h1>Test Laravel fotsiny</h1>
       <img src="{{ asset('images/product-2.jpg') }}" alt="produit">
       <p>&hearts;build by mika</p>
       <p> <a href="{{route('home')}}"> Home </a> </p>
@endsection

@section('title','About us | '.config('app.name'))
