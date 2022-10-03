@extends('master')

@section('title')
    Edit Blog page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Blog Form</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('blog.update', ['id' => $blog->id])}}"method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" value="{{$blog->title}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="author"value="{{$blog->author}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control">{{$blog->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control"/>
                                        <img src="{{asset($blog->image)}}" alt="" height="100" width="120"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success px-5" value="Update Blog Info"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

