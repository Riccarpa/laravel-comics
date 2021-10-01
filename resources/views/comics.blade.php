@extends('layouts.main')

@section('title','| Comics')
    


@section('content')
   
<section id="comics">
    <div class="container">
        @foreach ($products as $product)
            <div class="card">
                <img src="{{$product['thumb']}}" alt="">
                <h3>{{$product['series']}}</h3>
            </div>
        @endforeach
    </div>
</section>

@endsection