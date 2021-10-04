@extends('layouts.main')

@section('title',"| {$product['title']}")

@section('content')
   <section id="info">
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
        <div class="bottom">

        </div>
    </div>
   </section>


@endsection