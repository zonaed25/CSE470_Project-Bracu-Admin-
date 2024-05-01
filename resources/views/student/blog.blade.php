@extends('layouts.app')
@section('content')
<div>
    <div class="album container mt-5">
        <div class="col-12">
            <h1 class="headding text-center pb-4">All Blogs</h1>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="featurette-image img-fluid mx-auto" style="height: 300px; object-fit:cover;" src="{{ asset('images/blogs/' . $blog->image) }}">
                    <div class="card-body">
                        <h5 class="card-text">{{ $blog->title }}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('student.view-blog', $blog->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection