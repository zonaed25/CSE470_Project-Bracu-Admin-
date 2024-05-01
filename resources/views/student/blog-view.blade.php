@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $blog->title }}</div>

                <div class="card-body">
                    <img src="{{ asset('images/blogs/' . $blog->image) }}" class="img-fluid mb-3" alt="Blog Image">
                    <p>{{ $blog->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
