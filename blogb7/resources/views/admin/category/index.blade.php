@extends('admin.master')

@section('title')
    Add New Category
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Category Form</h4>
                        </div>
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                       <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="card-body">
                               <div class="row mb-3">
                                   <label class="col-md-3">Category Name</label>
                                   <div class="col-md-9">
                                       <input type="text" name="name" class="form-control"/>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label class="col-md-3">Category Description</label>
                                   <div class="col-md-9">
                                       <textarea name="description" class="form-control"></textarea>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label class="col-md-3">Image</label>
                                   <div class="col-md-9">
                                       <input type="file" name="image" class="form-control"/>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label class="col-md-3">Publication Status</label>
                                   <div class="col-md-9">
                                       <label><input name="status" type="radio" value="1">Published</label>
                                       <label><input name="status" type="radio" value="0">Unpublished</label>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label class="col-md-3"></label>
                                   <div class="col-md-9">
                                       <input type="submit"  class="btn btn-outline-success px-5" value="Create New Category"/>
                                   </div>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
