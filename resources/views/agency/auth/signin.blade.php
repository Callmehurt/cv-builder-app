@extends('agency.auth.layout')

@section('content')
<div class="row vh-100 g-0">
    <div class="col-lg-6 position-relative d-none d-lg-block">
      <div class="bg-holder" style="background-image:url();"></div>
      <!--/.bg-holder-->
    </div>
    <div class="col-lg-6">
        @livewire('auth.agency-signup-form')
    </div>
  </div>
@endsection