<div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{ asset('images/kingston.png') }}" alt="" height="50"></div>
  </a>
  <div class="text-center mb-4">
    <h3 class="text-body-highlight">Sign Up</h3>
    <p class="text-body-tertiary">Create your account today</p>
  </div>
  <form>
    <div class="mb-3 text-start">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" wire:model="name" id="name" type="text" placeholder="Name">
        @error('name')
        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 text-start">
        <label class="form-label" for="email">Email address</label>
        <input class="form-control" wire:model="email" id="email" type="email" placeholder="name@example.com">
        @error('email')
        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 text-start">
        <label class="form-label" for="address">Address</label>
        <input class="form-control" wire:model="address" id="address" type="text" placeholder="London">
        @error('email')
        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 text-start">
        <label class="form-label" for="contact">Contact</label>
        <input class="form-control" wire:model="contact" id="contact" type="text" placeholder="75896896987">
        @error('contact')
        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 text-start">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" wire:model="password" id="password" type="text" placeholder="75896896987">
        @error('password')
        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary w-100 mb-3">Sign up</button>
    <div class="text-center"><a class="fs-9 fw-bold" href="{{ route('job-seeker.login.page') }}">Sign in to an existing account</a></div>
  </form>
</div>
