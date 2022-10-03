@extends('master')

@section('title')
    Home page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-body text-center bg-warning">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student['name']}}</td>
                                <td>{{$student['email']}}</td>
                                <td>{{$student['mobile']}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
