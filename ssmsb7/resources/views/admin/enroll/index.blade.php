@extends('admin.master')

@section('title')
    Manage Enroll
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-header bg-info">
                        <h4 class=" text-center text-white">This is Manage Enroll Page.</h4>
                    </div>

                    <div class="card card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL NO.</th>
                                <th>Course Title</th>
                                <th>Student Info</th>
                                <th>Enroll Date</th>
                                <th>Payment Status</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($enrolls as $enroll)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$enroll->course->title}}</td>
                                    <td>{{$enroll->student->name.'('.$enroll->student->mobile.')'}}</td>
                                    <td>{{$enroll->enroll_date}}</td>
                                    <td>{{$enroll->payment_status}}</td>
                                    <td>{{$enroll->enroll_status}}</td>
                                    <td>
                                        <a href="{{route('admin.update-enroll-status',['id'=>$enroll->id])}}" class="btn {{$enroll->enroll_status == 'Pending' ? 'btn-warning' : 'btn-success'}} btn-sm">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                    </td>
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
