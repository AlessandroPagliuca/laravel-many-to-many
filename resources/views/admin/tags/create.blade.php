@extends('layouts.app')

@section('content')
    <section class="container padding-home">
        <h1 class="text-white">Insert new tag </h1>
        <form action="{{ route('admin.tags.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <p class="text-white">Create tag:</p>
                <input type="text" class="form-control @error('name') is-invalid
                @enderror" name="name"
                    id="name" aria-describedby="nameTag" value=" {{ old('name') }} ">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </section>
@endsection
