@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-2 d-flex align-items-center gap-4">
        <h1 class="display3 py-4">Delete Book</h1>
    </div>
    <div class="row pt-3">                
        <p class="lead">Are you sure you want to delete <br/> <span class="fw-bold">{{$book -> title}}</span></p>
            <p class="lead">Please keep in mind, you cannot revert this action</p>
            <div class="d-flex align-items-center gap-4 mt-4">
                <a href="{{ route('books.index')}}" class="btn btn-light">Cancel</a>
                <form method="POST" action="{{ route('books.destroy',  ['book' => $book]) }}">
                    @csrf 
                    @method('delete')
                    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
    </div>
</div>
@endsection