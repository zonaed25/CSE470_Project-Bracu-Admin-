@extends('layouts.app')

@section('content')
<div class="p-4">
    <div>
        <h2>Change Password</h2>
    </div>
    <div class="mt-3">
        <form method="POST" action="{{ route('change-password.submit') }}">
            @csrf

            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
                @error('current_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
            </div>

            <div class="form-group">
                <label for="new_password_confirmation">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
            </div>

            @error('new_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <button type="submit" class="btn btn-info">Change</button>
        </form>
            
    </div>
</div>
@endsection
