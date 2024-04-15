@extends('layouts.admin')
@section('content')
<div class="p-4">
    <div>
        <h2>All Blog</h2>
        <a href=""><button class="btn btn-info">Create</button></a>
    </div>

    <div class="mt-3">
        <div class="w-75 m-auto">
            <div class="border rounded p-4">
                <img class="rounded" width="100%" src="https://images.unsplash.com/photo-1561877202-53d0e24be55d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
                <p class="mt-2 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quod. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda id iure sit deserunt voluptate. Vero delectus beatae ex quod optio?</p>
            </div>
            <br>
            <div class="border rounded p-4">
                <img class="rounded" width="100%" src="https://images.unsplash.com/photo-1561877202-53d0e24be55d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
                <p class="mt-2 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi enim reprehenderit doloremque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quod.</p>
            </div>
        </div>
    </div>
</div>
@endsection