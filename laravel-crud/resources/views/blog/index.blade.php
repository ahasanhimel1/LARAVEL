@extends('master')

@section('title')
    Home page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center text-danger">{{Session::get('message')}}</h3>
                    <h1 class="text-center">This is home page</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
