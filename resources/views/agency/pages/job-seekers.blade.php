@extends('agency.layout')

@push('title')
  Job Seekers
@endpush

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0">Filter Job Seekers</h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
                <div class="p-4">
                    <form action="{{ route('agency.filterCandidate') }}" method="GET">
                        <div class="row">
                            <div class="col-4">
                                <div class="">
                                    <label class="form-label" for="">Skill Name </label>
                                    <input class="form-control" name="skill" value="{{ $filter['skill'] }}" type="text" placeholder="Eg: React">
                                    @error('skill')
                                    <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
                                    @enderror 
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="">
                                    <label class="form-label" for="">Experience </label>
                                    <input class="form-control" name="experience" value="{{ $filter['experience'] }}" type="text" placeholder="Eg: Backend Developer">
                                    @error('experience')
                                    <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
                                    @enderror 
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn-primary mt-3" type="submit">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                  <h4 class="text-body mb-0">Job Seekers List</h4>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
                <div class="p-4">
                    <div class="table-responsive scrollbar">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Skills</th>
                                    <th>Experiences</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($filter['candidates'] as $key => $candidate)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $candidate->name }}</td>
                                        <td>{{ $candidate->email }}</td>
                                        <td>{{ $candidate->address }}</td>
                                        <td>
                                            @foreach ($candidate->skills as $skill)
                                            <span class="badge text-bg-primary">{{ $skill->skill }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($candidate->experiences as $experience)
                                            <span class="badge text-bg-primary">{{ $experience->title }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" style="text-align: center;"><span style="color: red">No record found</span></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection