@extends('layouts.admin')

    @section('content')
    <div class="container">
        <div class="py-2 d-flex align-items-center gap-4">
            <h1 class="display3 py-4">Edit Book</h1>
        </div>
        <form class="mt-3" style="width: 20rem" method="POST" action="{{ route('books.update', $book -> id)}}">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ $book -> title}}" id="title" name="title" placeholder="Enter book title" aria-describedby="Title of the book">
              </div>
              <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="number" class="form-control" value="{{ $book -> price}}" id="price" name="price" placeholder="Enter price" aria-describedby="Price of the book">
              </div>
              <div class="mb-3">
                  <label for="publication_date" class="form-label">Publication Date</label>
                  <input type="date" class="form-control" value="{{ $book -> publication_date}}" id="publication_date" name="publication_date" aria-describedby="Publication date of the book">
              </div>
              <div class="mb-3">
                  <label for="author_id" class="form-label">Author</label>
                  <select class="form-control" id="author_id" name="author_id">
                      <option value="">Select Author</option>
                      @foreach ($authors as $author )
                          <option value="{{ $author -> id }}" @if ($book -> author_id == $author->id) selected @endif >{{ $author -> first_name }} {{ $author -> last_name }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="py-3 d-flex align-items-center gap-4">
                  <a href="{{ route('books.index')}}" class="btn btn-light">Cancel</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
    </div>
@endsection