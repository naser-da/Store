@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Picture</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered at</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Picture</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered at</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{-- <img src="{{asset('storage/' . $book->image)}}" alt="{{$book->title . ' cover image'}}" width=40> --}}
                            </td>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection