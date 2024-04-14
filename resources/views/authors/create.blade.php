@extends('layouts.admin')

    @section('content')
    <div class="container">
        <div class="py-2 d-flex align-items-center gap-4">
            <h1 class="display3 py-4">Create Author</h1>
        </div>
        <form class="mt-3" style="width: 20rem" method="POST" action="{{ route('authors.store')}}">
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
              <label for="first_name" class="form-label">First Name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" aria-describedby="First name of the author">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" aria-describedby="Last name of the author">
            </div>
            <div class="mb-3">
                <label for="biography" class="form-label">Biography</label>
                <textarea class="form-control" id="biography" name="biography" placeholder="Write something about yourself" aria-describedby="Biography of the author" cols="30" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="nationality" class="form-label">Nationality</label>
                <select class="form-control" id="nationality" name="nationality">
                    <option value="">Select Your Nationality</option>
                    <option value="India">India</option>
                    <option value="America">America</option>
                    <option value="Canada">Canada</option>
                    <option value="Russia">Russia</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" id="language" name="language" placeholder="Enter your language" aria-describedby="Language of the author">
            </div>
            <div class="mb-3">
                <label for="birthplace" class="form-label">Birth Place</label>
                <input type="text" class="form-control" id="birthplace" name="birthplace" placeholder="Enter your birth place" aria-describedby="birthplace of the author">
            </div>
            <div class="py-3 d-flex align-items-center gap-4">
                <a href="{{ route('authors.index')}}" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
@endsection