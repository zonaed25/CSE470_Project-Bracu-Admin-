@extends('layouts.app')
@section('content')
<div class="container pt-5">
    <div>
        <h2>My Payments</h2>
        <a href="{{ route('student.make-payment') }}"><button class="btn btn-sm btn-primary">Add</button></a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Transaction id</th>
                    <th scope="col">Payed Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td>{{ $payment->fee_name }}</td>
                    <td>{{ $payment->tr_id }}</td>
                    <td>{{ $payment->fee }} /-</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
