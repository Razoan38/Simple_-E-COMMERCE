@extends('admin.master')

@section('title')
Home
@endsection
@section('body')
<div class="container my-3">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">Add New Product</div>
                <div class="card-body">
                    <form action="{{ route('admin.product.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="category">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Brand Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="brand">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="price">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Details</label>
                        <div class="col-md-9">
                            <textarea name="details" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-info px-3" value="Add Product">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection