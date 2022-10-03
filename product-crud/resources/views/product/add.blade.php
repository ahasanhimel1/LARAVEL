@extends('master')

@section('title')
    Add Product Page
@endsection

@section('body')
    <section class="py-5 bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center fw-bold">Add Product Page</h3>
                        </div>

                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="category"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="brand"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" ></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Create New Product"/>
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

