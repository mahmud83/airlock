@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <nav>
      <div class="nav nav-tabs">
        <a class="nav-item nav-link active">Data table</a>
        <a class="nav-item nav-link" href="{{ route('students.create') }}">Buat</a>
        <a class="nav-item nav-link" href="{{ route('students.upload') }}">Import excel</a>
      </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Daftar siswa
        </div>
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-sm table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>User ID</th>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($datas as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->nisn }}</td>
                            <td>{{ $data->nis }}</td>
                            <td>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('students.show', $data->id) }}">Show</a>
                                    <a class="dropdown-item" href="{{ route('students.edit', $data->id) }}">Edit</a>
                                    <form method="post" action="{{ route('students.destroy', $data->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="dropdown-item" onclick="return confirm('Are you sure want delete this student?')">
                                            Delete
                                        </button>
                                    </form>
                                  </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5"><small>Tidak ada data</small></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection