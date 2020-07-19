@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <nav>
        <div class="nav nav-tabs">
            <a class="nav-item nav-link" href="{{ route('apps.index') }}">Data table</a>
            <a class="nav-item nav-link active">Edit</a>
        </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Edit app
        </div>
        <div class="card-body">
            <form action="{{ route('apps.update', $app->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>App name</label>
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="App name" name="name" value="{{ $app->name }}" required="">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>App URL</label>
                    <input type="text" class="form-control form-control-sm @error('url') is-invalid @enderror" placeholder="App url login" name="url" value="{{ $app->url }}" required="">
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection