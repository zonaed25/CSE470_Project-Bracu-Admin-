@extends('layouts.admin')

@section('content')
<div class="p-4">
    <div>
        <h2>Edit Event</h2>
    </div>
    <div class="mt-3">
        <form method="POST" action="{{ route('admin.event.update', $event) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}">
            </div>

            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $event->title }}">
            </div>

            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
</div>
@endsection
