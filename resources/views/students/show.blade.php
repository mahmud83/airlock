@extends('layouts.app')

@section('content')
<div class="container">
    <nav>
      <div class="nav nav-tabs">
        <a class="nav-item nav-link" href="{{ route('students.index') }}">Data table</a>
        <a class="nav-item nav-link active">Show</a>
        <a class="nav-item nav-link" href="{{ route('students.upload') }}">Import excel</a>
      </div>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Show student
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-striped table-sm">
                            <tr>
                                <td>User ID</td>
                                <td>{{ $student->user_id }}</td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>{{ $student->nisn }}</td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td>{{ $student->nis }}</td>
                            </tr>
                            <tr>
                                <td>Joined</td>
                                <td>{{ $student->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <td>Updated</td>
                                <td>{{ $student->updated_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection