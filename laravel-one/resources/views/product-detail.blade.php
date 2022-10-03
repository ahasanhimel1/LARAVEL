@extends('master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset('/')}}img/{{$product['image']}}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$product['name']}}</h1>
                        <h2>{{$product['price']}}</h2>
                        <h3>{{$product['detail']}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
