@extends('website.master')
@section('title')
    Course
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Our All Courses</h1>
                    <h3 class="text-center text-danger">{{Session::get('message')}}</h3>
                </div>
            </div>
        </div>
        <div class="container py-5">

            <div class="row">

                @foreach($courses as $course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset($course->image)}}" alt="" class="card-img-top" style="height: 250px;">
                            <div class="card-body">
                                <h4>{{$course->title}}</h4>
                                <h5>{{$course->teacher->name}}</h5>
                                <p>Tk. {{$course->fee}}</p>
                                <p>Starting Date: {{$course->starting_date}}</p>
                                <hr/>
                                <a href="{{route('courses-detail',['id'=>$course->id])}}}" class="btn btn-success px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </section>
@endsection

