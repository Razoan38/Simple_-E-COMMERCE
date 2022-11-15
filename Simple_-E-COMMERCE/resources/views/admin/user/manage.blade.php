@extends('admin.master')

@section('title')
All Products
@endsection
@section('body')
<div class="container-fluid py-5">
    <div class="card mb-4">
        <p class="text-center text-success">{{ Session::get('message')}}</p>
        <p class="text-center text-danger">{{ Session::get('message2')}}</p>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Existing Products
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>User E-mail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.user.edit',['id'=>$user->id]) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('admin.user.delete',['id'=>$user->id]) }}" class="btn btn-outline-danger" onclick="return confirm('Are You Sure To Delete This User?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection