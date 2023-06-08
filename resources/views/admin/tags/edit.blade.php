@extends('layouts.app')

@section('content')
    <section class="container padding-home">
        <h1 class="text-white">Edit tag: {{ $tag->name }} </h1>
        <form action="{{ route('admin.tags.update', $tag->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <p class="text-white">Edit tag:</p>
                <input type="text" class="form-control @error('name') is-invalid
                @enderror" name="name"
                    id="name" aria-describedby="nameTag" value=" {{ old('tag', $tag->name) }} ">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- <input type="text" class="form-control @error('year') is-invalid
                @enderror"
                    name="year" id="year" aria-describedby="yearProject"
                    value=" {{ old('year', $project->year) }} ">
                @error('year')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror --}}

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </section>
@endsection
