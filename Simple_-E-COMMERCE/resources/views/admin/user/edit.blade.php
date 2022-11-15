@extends('admin.master')

@section('title')
Update {{ $user->name }}
@endsection
@section('body')
<div class="container my-3">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">Update {{ $user->name }}</div>
                <div class="card-body">
                    <form action="{{ route('admin.user.update',['id'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-md-3">User Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">E-mail</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-info px-3" value="Update User">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection