@extends('layouts.admin')


@section('content')

    <h2>{{ $user->name }}</h2>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Book</h6>
        </div>
        <form action="{{route('users.insert')}}" method="post">
            @csrf
            <input type="text" name="name" value="{{$user->name}}" class="form-control">
            <input type="email" name="email" value="{{$user->email}}" class="form-control">
            <input type="hidden" name="id" value="{{$user->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


@endsection