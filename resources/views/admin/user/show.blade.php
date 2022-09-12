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
                <p><b>Name: </b> {{ $user->name }}</p>
                <div>
                    <b>Who Created: </b>

                    @foreach ($admins as $admin)
                        @if ($admin->id == $user->admin_id)
                            {{ $admin->name }}
                        @endif
                    @endforeach
                </div>
                <div>
                    <b>User Group: </b>

                    @foreach ($userGroups as $userGroup)
                        @if ($userGroup->id == $user->user_group_id)
                            {{ $userGroup->title }}
                        @endif
                    @endforeach
                </div>

            </div>
        </div>

    </div>
@endsection
