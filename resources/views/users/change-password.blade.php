@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Ubah password
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('users.store-change-password') }}">
                        @csrf
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="Password" name="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Konfirm password</label>
                            <input type="password" class="form-control form-control-sm " placeholder="Konfirm password" name="password_confirmation">
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
    </div>
</div>
@endsection