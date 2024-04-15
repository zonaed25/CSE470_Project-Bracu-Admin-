@extends('layouts.admin')
@section('content')
<div class="p-4">
    <div>
        <h2>All Event</h2>
        <a href=""><button class="btn btn-info">Create</button></a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th style="min-width:150px" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td>12-Jan-2024</td>
                    <td>Lorem ipsum dolor.</td>
                    <td class="align-middle">
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <form action="" method="POST" style="display: inline;">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this department?')">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection