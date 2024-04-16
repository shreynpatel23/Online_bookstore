@extends('layouts.admin')

@section('content')
    {{-- <div class="container">
        <h1 class="disaply3 py-4">Home Page</h1>
    </div> --}}
    <main class="h-100">
        <div class="py-5 d-flex align-items-center" style="height: 80vh">
            <div class="py-3 container text-center text-dark">
                <h1 class="my-4">Welcome to my library</h1>
                <p class="tagline" style="max-width: 40%; margin: 2em auto">Organize, borrow, and explore books effortlessly with our Library Management System - your gateway to a world of knowledge. </p>
                <a href="/books" class="btn btn-primary my-2">Check Books</a>
            </div>
        </div>
    </main>
@endsection