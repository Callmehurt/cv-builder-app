@extends('agency.layout')


@push('title')
  Job Seeker Dashboard
@endpush

@section('content')

<div class="pb-5">
    <div class="row g-4">
      <div class="col-12 col-xxl-6">
        <div class="mb-8">
          <h2 class="mb-2">Job Seeker Dashboard</h2>
          <h5 class="text-body-tertiary fw-semibold">Welcome {{ auth('job-seeker')->user()->name }}</h5>
        </div>
    </div>
  </div>

@endsection