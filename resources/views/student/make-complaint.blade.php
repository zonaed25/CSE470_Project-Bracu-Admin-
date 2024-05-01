@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div>
        <h2>Make Complaint</h2>
    </div>

    <div class="mt-3">
        <form method="POST" action="{{ route('complaints.store') }}">
            @csrf

            <div class="form-group">
                <textarea class="form-control mb-3" name="details" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>

    </div>
</div>

@endsection