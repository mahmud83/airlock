@extends('layouts.app')

@section('content')
<div class="container">
    <nav>
      <div class="nav nav-tabs">
        <a class="nav-item nav-link" href="{{ route('users.index') }}">Data table</a>
        <a class="nav-item nav-link active">Show</a>
        <a class="nav-item nav-link" href="{{ route('users.upload') }}">Import excel</a>
      </div>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Show user
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-striped table-sm">
                            <tr>
                                <td>Nama</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Joined</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <td>Updated</td>
                                <td>{{ $user->updated_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection