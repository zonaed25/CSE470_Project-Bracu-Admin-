@extends('layouts.admin')
@section('content')
<div class="p-4">
    <div>
        <h2>Announcement</h2>
    </div>
    <div class="mt-3">

        <div>
            <form method="POST" action="">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <textarea class="form-control mb-3" id="details" name="details" rows="3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error voluptas quos expedita hic incidunt corrupti ratione ipsam distinctio voluptates laboriosam?</textarea>
                </div>

                <input class="btn btn-info" type="submit" value="Update">
            </form>
        </div>

    </div>
</div>
@endsection


