@extends('layouts.main')

@section('title','| Comics')
    


@section('content')
   
<section id="comics">
    <div class="current-series">CURRENT SERIES</div>
    <div class="container">
        @foreach ($products as $product)
            <a href="{{route('comics-info',['id'=>$loop->index])}}">
                <div class="card">
                    <img src="{{$product['thumb']}}" alt="">
                    <h3>{{$product['series']}}</h3>
                </div>
            </a>
        @endforeach
    </div>
</section>

@endsection