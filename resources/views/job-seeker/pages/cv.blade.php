@extends('agency.layout')


@push('title')
  CV
@endpush

@section('content')

<div class="pb-5">
    <div class="row g-4">
      <div class="col-6">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0">Personal Details</h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="p-4 code-to-copy">
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlInput">Name </label>
                  <input class="form-control" id="exampleFormControlInput" type="text" placeholder="David Jones">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlInput">Address </label>
                  <input class="form-control" id="exampleFormControlInput" type="text" placeholder="London">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlInput">Contact </label>
                  <input class="form-control" id="exampleFormControlInput" type="text" placeholder="5896587458">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlInput">Email address </label>
                  <input class="form-control" id="exampleFormControlInput" type="email" placeholder="name@example.com">
                </div>
                {{-- <div class="mb-0">
                  <label class="form-label" for="exampleTextarea">Example Textarea </label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"> </textarea>
                </div> --}}
              </div>
            </div>
        </div>
      </div>
      <div class="col-7">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0">Skills</h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="p-4 code-to-copy">
                <span class="badge text-bg-primary">Web Development</span>
              </div>
            </div>
        </div>
      </div>
      <div class="col-5">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0">Add Skill</h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="p-4 code-to-copy">
                <form action="">
                    @csrf
                    <div class="">
                        <label class="form-label" for="">Name </label>
                        <input class="form-control"  type="text" placeholder="Web Development">
                    </div>
                    <div class="">
                        <button class="btn btn-primary mt-3">Submit</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection