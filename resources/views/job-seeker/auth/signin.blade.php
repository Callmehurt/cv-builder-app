@extends('agency.auth.layout')

@push('title')
  Job-Seeker Sign In
@endpush


@section('content')
<div class="row vh-100 g-0">
    <div class="col-lg-6 position-relative d-none d-lg-block">
      <div class="bg-holder" style="background-image:url({{ asset('images/login-background.webp') }});"></div>
      <!--/.bg-holder-->
    </div>
    <div class="col-lg-6">
        @livewire('auth.job-seeker-signin-form')
    </div>
  </div>
@endsection