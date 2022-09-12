@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Edit</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between pt-4">
            <h5 class="card-title">Edit User Group</h5>
            <a href="{{ route('users.index') }}" class="btn btn-primary">Show Users</a>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user )}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="Enter User Name" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="Enter Phone" name="phone" value="{{$user->phone}}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <textarea class="form-control" name="address" rows="5">{{$user->address}}</textarea>
                </div>

                <div class="form-group">
                    <label>User Group</label>
                    <select class="custom-select" name="user_group_id">

                        @foreach ($userGroups as $userGroup)
                            <option value="{{ $userGroup->id }}" {{$userGroup->id == $user->user_group_id  ? 'selected' : ''}}>{{ $userGroup->title }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label>How Create</label>
                    <select class="custom-select" name="admin_id" disabled>

                        @foreach ($admins as $admin)
                            <option value="{{ $admin->id }}" {{$admin->id == $user->admin_id  ? 'selected' : ''}}>{{ $admin->name }}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
