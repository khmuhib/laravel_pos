@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">User Group</h1>

        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">User Group List</h5>
                <a href="{{ route('user-groups.create') }}" class="btn btn-primary">Add User Group</a>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user_groups as $user_group)
                                <tr>
                                    <td>{{$user_group->id}}</td>
                                    <td>{{$user_group->title}}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('user-groups.edit', $user_group) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('user-groups.destroy', $user_group) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
