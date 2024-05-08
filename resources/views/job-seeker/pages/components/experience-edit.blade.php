@extends('agency.layout')


@push('title')
  Edit Experience
@endpush

@section('content')

<div class="pb-5">
    <div class="row g-4">
      <div class="col-6">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0">Edit Experience</h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
                <div class="p-4">
                    <form action="{{ route('seeker.updateExperience', $experience->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label class="form-label" for="">Title </label>
                            <input class="form-control" value="{{ $experience->title }}" name="title" type="text" placeholder="Eg: Backend Developer">
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Employment type </label>
                            <select class="form-control" name="employment_type">
                              <option value="full-time" @if($experience->employment_type == 'full-time') selected @endif>Full-time</option>
                              <option value="part-time" @if($experience->employment_type == 'part-time') selected @endif>Part-time</option>
                              <option value="freelance" @if($experience->employment_type == 'freelance') selected @endif>Freelance</option>
                              <option value="contract" @if($experience->employment_type == 'contract') selected @endif>Contract</option>
                              <option value="internship" @if($experience->employment_type == 'internship') selected @endif>Internship</option>
                            </select>
                        </div>
                        <div class="mb-2">
                          <label class="form-label" for="">Company Name </label>
                          <input class="form-control" value="{{ $experience->company_name }}" name="company_name" type="text" placeholder="Eg: Microsoft">
                        </div>
                        <div class="mb-2">
                          <label class="form-label" for="">Location </label>
                          <input class="form-control" value="{{ $experience->location }}" name="location" type="text" placeholder="Eg: London">
                        </div>
                        <div class="mb-2">
                          <label class="form-label" for="">Location type </label>
                          <select class="form-control" name="location_type">
                            <option value="on-site" @if($experience->location_type == 'on-site') selected @endif>On-site</option>
                            <option value="hybrid" @if($experience->location_type == 'hybrid') selected @endif>Hybride</option>
                            <option value="remote" @if($experience->location_type == 'remote') selected @endif>Remote</option>
                          </select>
                      </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="mb-2">
                              <label class="form-label" for="">Start Date </label>
                              <input class="form-control" value="{{ $experience->start_date }}" name="start_date" type="date">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="mb-2">
                              <label class="form-label" for="">End Date </label>
                              <input class="form-control" value="{{ $experience->end_date }}" name="end_date" type="date">
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection