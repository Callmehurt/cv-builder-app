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
                @foreach ($skills as $skill)
                <span class="badge text-bg-primary">{{ $skill->skill }}</span>
                @endforeach
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
                <form action="{{ route('seeker.addSkill') }}" method="POST">
                    @csrf
                    <div class="">
                        <label class="form-label" for="">Name </label>
                        <input class="form-control" name="name" type="text" placeholder="Web Development">
                        @error('name')
                        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="">
                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
      </div>
      <div class="col-8">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-center">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0">Experiences</h4>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="p-4">
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addExperienceModal">Add Experience</button>
             <hr>
             @include('job-seeker.pages.components.experiences')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addExperienceModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="addExperienceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white dark__text-gray-1100">Add New Experience</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-9 text-white dark__text-gray-1100"></span></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('seeker.addExperience') }}" method="POST" id="experience-add-form">
            @csrf
            <div class="mb-2">
                <label class="form-label" for="">Title </label>
                <input class="form-control" name="title" type="text" placeholder="Eg: Backend Developer">
            </div>
            <div class="mb-2">
                <label class="form-label" for="">Employment type </label>
                <select class="form-control" name="employment_type">
                  <option value="full-time">Full-time</option>
                  <option value="part-time">Part-time</option>
                  <option value="freelance">Freelance</option>
                  <option value="contract">Contract</option>
                  <option value="internship">Internship</option>
                </select>
            </div>
            <div class="mb-2">
              <label class="form-label" for="">Company Name </label>
              <input class="form-control" name="company_name" type="text" placeholder="Eg: Microsoft">
            </div>
            <div class="mb-2">
              <label class="form-label" for="">Location </label>
              <input class="form-control" name="location" type="text" placeholder="Eg: London">
            </div>
            <div class="mb-2">
              <label class="form-label" for="">Location type </label>
              <select class="form-control" name="location_type">
                <option value="on-site">On-site</option>
                <option value="hybrid">Hybride</option>
                <option value="remote">Remote</option>
              </select>
          </div>
            <div class="row">
              <div class="col-6">
                <div class="mb-2">
                  <label class="form-label" for="">Start Date </label>
                  <input class="form-control" name="start_date" type="date">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-2">
                  <label class="form-label" for="">End Date </label>
                  <input class="form-control" name="end_date" type="date">
                </div>
              </div>
            </div>
        </form>
        </div>
        <div class="modal-footer"><button class="btn btn-primary" type="button" onclick="addExperience()">Submit</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
      </div>
    </div>
  </div>


  <script>

    function addExperience(){
      let form = document.getElementById('experience-add-form');
      form.submit();
    }
  </script>

@endsection