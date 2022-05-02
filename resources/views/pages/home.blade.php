@extends('template')

@section('content')
<h1>Test Laravel fotsiny mety le yield</h1>

<p>Its currently {{ 2+6}}.</p>
@endsection

@section('title','Home |'.config('app.name'))

@section('footer')
    <a href="{{ route('about') }}"> About us </a>
@endsection