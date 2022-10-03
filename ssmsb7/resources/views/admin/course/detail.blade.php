@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Course ID</th>
                        <td>{{$course->id}}</td>
                    </tr>
                    <tr>
                        <th>Course Title</th>
                        <td>{{$course->title}}</td>
                    </tr>
                    <tr>
                        <th>Course Fee</th>
                        <td>{{$course->fee}}</td>
                    </tr>
                    <tr>
                        <th>Course Starting Date</th>
                        <td>{{$course->starting_date}}</td>
                    </tr>
                    <tr>
                        <th>Course Duration</th>
                        <td>{{$course->duration}}</td>
                    </tr>
                    <tr>
                        <th>Course Image</th>
                        <td><img src="{{asset($course->image)}}" alt="" height="100" width="150"/></td>
                    </tr>
                    <tr>
                        <th>Course Description</th>
                        <td>{!! $course->description !!}</td>
                    </tr>
                </table>
            </div>>
        </div>
    </div>
@endsection

