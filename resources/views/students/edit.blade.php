@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<div class="container">
    @include('layouts.flash')
    <nav>
        <div class="nav nav-tabs">
            <a class="nav-item nav-link" href="{{ route('students.index') }}">Data table</a>
            <a class="nav-item nav-link active">Edit</a>
            <a class="nav-item nav-link" href="{{ route('students.upload') }}">Import excel</a>
        </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Edit siswa
        </div>
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>USER ID</label>
                            <input type="text" class="form-control form-control-sm @error('user_id') is-invalid @enderror" placeholder="User ID" name="user_id" value="{{ $student->user_id }}" required="">
                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" class="form-control form-control-sm @error('nisn') is-invalid @enderror" placeholder="NISN" name="nisn" value="{{ $student->nisn }}" required="">
                            @error('nisn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" class="form-control form-control-sm @error('nis') is-invalid @enderror" placeholder="NIS" name="nis" value="{{ $student->nis }}" required="">
                            @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection