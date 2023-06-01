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
                        <th>ID</th>
                        <th>Title</th>
                        <th>Publish Date</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Cover</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Publish Date</th>
                        <th>Price</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>
                                <img src="{{asset($book->image)}}" alt="">
                            </td>
                            <td>{{$book->id}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->publish_date}}</td>
                            <td>{{$book->price / 100}}$</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection