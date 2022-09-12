@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Product Create</h1>

        <div class="card">
            <div class="card-header d-flex justify-content-between pt-4">
                <h5 class="card-title">Product Listing</h5>
                <a href="#" class="btn btn-primary">Show Product</a>
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
