@extends('layouts.app')

@section('content')
<div class="p-4">
    <div>
        <h2>Create Event</h2>
    </div>
    <div class="mt-3">
        <form method="POST" action="">
            @csrf

            <div class="form-group">
                <label for="new_password">Date</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
            </div>

            <div class="form-group">
                <label for="new_password_confirmation">Name</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-info">Add</button>
        </form>
            
    </div>
</div>
@endsection
