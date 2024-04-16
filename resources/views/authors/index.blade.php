@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-2 d-flex align-items-center gap-4">
        <h1 class="display3 py-4">Author List</h1>
        <a href="{{ route('authors.create')}}" class="btn btn-primary">Create Author</a>
    </div>
    <div class="row pt-3">
        @foreach ($authors as $author)
            <a href="{{ route('authors.show', $author -> id)}}" class="text-black">
                <h3 class="display4">{{$author -> first_name}} {{$author -> last_name}}</h3>   </a>         
            <p>{{$author -> biography}}</p>    
            <p class="card-text">Nationality: <span class="fw-bold" >{{$author -> nationality}}</span> </p>                
            <p class="card-text">Language: <span class="fw-bold" >{{$author -> language}}</span> </p>                
            <p class="card-text">Birth Place: <span class="fw-bold" >{{$author -> birthplace}}</span> </p>                         
            <hr>
        @endforeach
    </div>
</div>
@endsection