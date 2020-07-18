@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <nav>
      <div class="nav nav-tabs">
        <a class="nav-item nav-link" href="{{ route('students.index') }}">Data table</a>
        <a class="nav-item nav-link" href="{{ route('students.create') }}">Buat</a>
        <a class="nav-item nav-link active">Import excel</a>
      </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Import student from excel
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                <b>Information: </b> id exists dengan user_id bersifat unik dalam artian tidak boleh ada yang sama antara row
            </div>
            <a href="{{ asset('download/format-input-students.xlsx') }}" class="btn btn-sm btn-success" download>Download format</a>
            <form action="{{ route('students.import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-2">
                    <input type="file" name="file">
                    <button class="btn btn-sm btn-primary" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection