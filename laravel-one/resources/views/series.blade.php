@extends('master')

@section('title')
    Series page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body text-center bg-primary pt-5">
                        <form action="{{route('new-series')}}" method="POST" class="text-white">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="starting_number"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="ending_number"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control">{{Session::get('message') ? Session::get('message'):" "}}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="submit_btn" value="Submit"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

