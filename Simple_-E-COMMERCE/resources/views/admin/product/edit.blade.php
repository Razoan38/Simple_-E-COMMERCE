@extends('admin.master')

@section('title')
Update - {{ $product->name }}
@endsection

@section('body')
<div class="container my-3">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">Add New Product</div>
                <div class="card-body">
                    <form action="{{ route('admin.product.update',['id'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="category" value="{{ $product->category }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Brand Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="brand" value="{{ $product->brand }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image">
                            <img src="{{ asset($product->image) }}" alt="" class="my-2" height="100" width="100">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Product Details</label>
                        <div class="col-md-9">
                            <textarea name="details" class="form-control" cols="30" rows="5">{{ $product->details }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-info px-3" value="Update Product">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection