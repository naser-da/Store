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
                        <th>Cover</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Publish Date</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Cover</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Publish Date</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>
                                <img src="{{asset('storage/' . $book->image)}}" alt="{{$book->title . ' cover image'}}" width=40>
                            </td>
                            <td>{{$book->id}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->publish_date}}</td>
                            <td>{{$book->price / 100}}$</td>
                            <td>
                                <form action="{{route('books.destroy', ['id' => $book->id])}}" method="post">
                                    @csrf

                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$books->links()}}
        </div>
    </div>
</div>
@endsection