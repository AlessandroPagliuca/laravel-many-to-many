@extends('layouts.app')

@section('content')
    <div class="container padding-home">
        <!--Tags list -->
        <div class="row flex-column justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-white">Tags list</h2>
                    <a href="{{ route('admin.tags.create') }}" class="fs-4 btn btn-light blue-01">Create</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Languages</th>
                            <th scope="col">
                                <i class="fa-solid fa-hammer"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <th scope="row">{{ $tag->id }}</th>
                                <td>{{ $tag->name }}</td>
                                <td class="d-flex justify-content-start flex-wrap">
                                    <a href="{{ route('admin.tags.show', $tag->slug) }}" class="btn btn-warning m-1">Show
                                        more</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
