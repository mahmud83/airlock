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
              <a href="#" class="list-group-item list-group-item-action">
                ExtraordinaryCBT
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
