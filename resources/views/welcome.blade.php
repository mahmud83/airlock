@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img src="{{ asset('img/school.svg') }}" style="max-width: 100%">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info">
              <div class="card-header bg-primary text-white">
                SSO Airlock
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Pendidikan adalah apa yang tersisa setelah melupakan semua yang dia pelajari di sekolah.</p>
                  <footer class="blockquote-footer">Albert Einstein</footer>
                </blockquote>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
