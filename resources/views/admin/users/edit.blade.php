@extends('layouts.app')

@section('content')
<div class="p-4">
    <div>
        <h2>Edit User</h2>
    </div>
    <div class="mt-3">
        <form method="POST" action="{{ route('user.update' , $edituser) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role">
                    <option value="0" @if($edituser->role == 0) selected @endif>Officer</option>
                    <option value="1" @if($edituser->role == 1) selected @endif>Admin</option>
                </select>
                @error('role')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="department">
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" @if($department->id == $edituser->department_id) selected @endif>{{ $department->name }}</option>
                    @endforeach
                </select>
                @error('department')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $edituser->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $edituser->email }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-info">Change</button>
        </form>
            
    </div>
</div>
@endsection
