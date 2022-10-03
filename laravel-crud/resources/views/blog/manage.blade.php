@extends('master')

@section('title')
    Manage Blog page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All Blog Info</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Blog Title</th>
                                    <th>Author Name</th>
                                    <th>Blog Description</th>
                                    <th>Blog Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->author}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt="" height="150" width="200">
                                    </td>
                                    <td>
                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete this!!!')">Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
