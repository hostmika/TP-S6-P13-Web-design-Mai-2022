@extends('template')

@section('content')
<h1>Test Laravel fotsiny mety le yield</h1>
<img src="{{ asset('images/product-1.jpg') }}" alt="produit">

<p>Its currently {{ 2+6}}.</p>
@endsection

@section('title','Home |'.config('app.name'))


