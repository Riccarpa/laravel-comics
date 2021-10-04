@extends('layouts.main')

@section('title',"| {$product['title']}")

@section('content')
   <section id="info">
       <div class="cover">
           <img src="{{$product['thumb']}}" alt="">
       </div>
        <div class="container">

            <div class="top">

                <div class="col left">
                    <h3>{{$product['title']}}</h3>
                    <div class="table">
                        <div>
                            <span>U.S Price {{$product['price']}}</span>
                            <span>AVAIBLE</span>
                        </div>
                        <span class="check">Check Avaibility</span>
                    </div>
                    <p>{{$product['description']}}</p>
                </div>

                <div class="col right">
                    <img src="../images/adv.jpg" alt="">
                </div>
            </div>
            
        </div>
        <div class="bottom">
            <div class="container">
                <div class="col talent">
                    <h2>Talent</h2>
                    <hr>
                    <div>
                        <h3>Art by:</h3>
                        <p>
                            @foreach ($product['artists'] as $artist)
                            {{$artist}}
                            @endforeach
                        </p>
                    </div>
                    <hr>
                    <div>
                        <h3>Written by:</h3>
                        <p>
                            @foreach ($product['writers'] as $artist)
                            {{$artist}}
                            @endforeach
                        </p>

                    </div>
                    <hr>
                </div>
                <div class="col specs">
                    <h2>Specs</h2>
                    <hr>
                    <div>
                        <h3>Series:</h3>
                        <span>{{$product['series']}}</span>
                    </div>
                    <hr>
                    <div>
                        <h3>U.S Price:</h3>
                        <span>{{$product['price']}}</span>
                    </div>
                    <hr>
                    <div>
                        <h3>On Sale Date:</h3>
                        <span>{{$product['sale_date']}}</span>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
   </section>


@endsection