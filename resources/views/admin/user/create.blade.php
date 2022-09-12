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
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" placeholder="Enter phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <select class="custom-select" name="user_group_id">
                            <option selected>User Group</option>
                            @foreach ($userGroups as $userGroup)
                                <option value="{{ $userGroup->id }}">{{ $userGroup->title }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <select class="custom-select" name="admin_id">
                            <option selected>Admin</option>
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
@endsection
