@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Add User</h5>
            <a href="{{ route('users.index') }}" class="btn btn-primary">Show User</a>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="text" class="form-control" placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
