@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <div class="row justify-content-center">
       <div class="col-md-3">
            <img src="{{ asset('img/school.svg') }}" style="max-width: 100%">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="list-group">
              <span class="list-group-item active">
                Daftar aplikasi
              </span>
              @foreach($datas as $data)
              <a href="{{ route('apps.show', $data->id) }}" class="list-group-item list-group-item-action" target="_blank">
                {{ $data->name }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
