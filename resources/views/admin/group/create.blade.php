@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Group</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add User Group</h5>
            <a href="{{ route('user-groups.index') }}" class="btn btn-primary">Show User Group</a>
        </div>
        <div class="card-body">
            <form action="{{ route('user-groups.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>User Group Name</label>
                    <input type="text" class="form-control" placeholder="Enter User Group Name" name="title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
