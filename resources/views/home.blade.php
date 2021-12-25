@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- create meta tag for csrf token  -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-12 text-end">
                <a class="btn btn-primary btn-sm rounded pull-right" href="{{ route('users.create') }}">Add New</a>
            </div>
            <div class="col-md-10 offset-md-1 col-12 mt-2">
                {{-- <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}"> --}}
                <table class="table table-bordered" id="users_listing">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Is Admin</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>Razin</td>
                            <td>razin.shaikh8732@gmail.com</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Test1</td>
                            <td>test1@email.com</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Test2</td>
                            <td>test2@email.com</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
@endsection
