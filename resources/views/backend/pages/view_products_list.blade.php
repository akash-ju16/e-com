@extends('backend.layouts.app')

@section('title', 'Admin | Products')

@section('content')

<h1>product list here</h1>

@if(session()->has('product-status'))
<span class="text-success"> {{ session('product-status') }} </span>
@endif

@foreach($productlist as $product)

{{$product->prod_name}}
@endforeach

@endsection