@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-2 d-flex align-items-center gap-4">
        <h1 class="display3 py-4">Book List</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
    </div>
    <div class="row pt-3">
        @foreach ($books as $book)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book -> title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$ {{$book -> price}} </h6>
                        <p class="card-text">Publication Date: <span class="fw-bold" >{{$book -> publication_date}}</span> </p>
                        {{-- <p class="card-text">Author: <a href="{{route('authors.show', $book -> author_id )}}" class="text-primary fw-bold">{{$book->author_id }} {{$book->author->last_name}}</a> </p> --}}
                        <div class="d-flex align-items-center gap-4 mt-3">
                            <a href="{{ route('books.edit', $book -> id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('books.trash', $book -> id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection