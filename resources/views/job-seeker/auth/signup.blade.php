@extends('agency.auth.layout')

@push('title')
    Job Seeker SignUp
@endpush

@section('content')
<div class="container">
    <div class="row flex-center min-vh-100 py-5">
        @livewire('auth.job-seeker-signup-form')
    </div>
  </div>
@endsection

