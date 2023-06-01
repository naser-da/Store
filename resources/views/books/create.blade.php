@extends('layouts.admin')

@section('content')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Book</h6>
        </div>
        <div class="card-body">
            <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Book Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Book Publish Year</label>
                    <input type="text" name="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Book Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Book Cover Image</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Book Price</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </div>
            </form>
        </div>
    </div>

@endsection