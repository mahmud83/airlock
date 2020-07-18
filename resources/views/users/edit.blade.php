@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <nav>
      <div class="nav nav-tabs">
        <a class="nav-item nav-link" href="{{ route('users.index') }}">Data table</a>
        <a class="nav-item nav-link active">Edit</a>
        <a class="nav-item nav-link" href="{{ route('users.upload') }}">Import excel</a>
      </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Edit user
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Nama user" name="name" value="{{ $user->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Alama email" name="email" value="{{ $user->email }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection