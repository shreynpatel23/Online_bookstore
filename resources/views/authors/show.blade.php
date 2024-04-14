@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="py-2 d-flex align-items-center gap-4">
        <h1 class="display3 py-4">Author Details</h1>
        <div class="ms-auto d-flex gap-4">
            <a href="{{ route('authors.edit', $author -> id)}}" class="btn btn-success">Edit</a>
            <a href="{{ route('authors.trash', $author -> id)}}" class="btn btn-danger">Delete</a>
        </div>
    </div>
    <div class="row pt-3">
        <h3 class="display4">{{$author -> first_name}} {{$author -> last_name}}</h3>            
        <p>{{$author -> biography}}</p>            
        <p>Nationality: {{$author -> nationality}}</p>            
        <p>Language: {{$author -> language}}</p>            
        <p>Birth Place: {{$author -> birthplace}}</p>                  
    </div>
</div>
@endsection