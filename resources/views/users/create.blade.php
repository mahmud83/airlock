@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <nav>
      <div class="nav nav-tabs">
        <a class="nav-item nav-link" href="{{ route('users.index') }}">Data table</a>
        <a class="nav-item nav-link active">Buat</a>
        <a class="nav-item nav-link" href="{{ route('users.upload') }}">Import excel</a>
      </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Buat user baru
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('users.store') }}">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Nama user" name="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Alama email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Konfirm password</label>
                    <input type="password" class="form-control form-control-sm" name="password_confirmation">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary" type="submit">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection