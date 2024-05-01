@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div>
        <h2>My Complaints</h2>
        <a href="{{ route('student.make-complaint') }}"><button class="btn btn-sm btn-primary">Add</button></a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($complaints as $complaint)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td>{{ $complaint->complaint }}</td>
                    <td class="align-middle">
                        @if ($complaint->status == 'pending')
                        <a href="#" class="btn btn-sm btn-success">Pending</a>
                        @elseif ($complaint->status == 'solved')
                        <a href="#" class="btn btn-sm btn-secondary">Solved</a>
                        @else
                        <span class="text-danger">Invalid Status</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection