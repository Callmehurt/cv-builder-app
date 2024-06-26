<div class="row flex-center h-100 g-0 px-4 px-sm-0">
    <div class="col col-sm-6 col-lg-7 col-xl-6"><a class="d-flex flex-center text-decoration-none mb-4" href="">
        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{ asset('images/kingston.png') }}" alt="phoenix" height="58"></div>
      </a>
      <div class="text-center mb-4">
        <h3 class="text-body-highlight">Sign In</h3>
        <p class="text-body-tertiary">Get access to your account</p>
      </div>
      <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
        <div class="form-icon-container"><input wire:model="email" class="form-control form-icon-input" id="email" type="email" placeholder="name@example.com"><svg class="svg-inline--fa fa-user text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path></svg><!-- <span class="fas fa-user text-body fs-9 form-icon"></span> Font Awesome fontawesome.com --></div>  
        @error('email')
        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
        @enderror
    </div>
      <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
        <div class="form-icon-container"><input wire:model="password" class="form-control form-icon-input" id="password" type="password" placeholder="Password"><svg class="svg-inline--fa fa-key text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z"></path></svg><!-- <span class="fas fa-key text-body fs-9 form-icon"></span> Font Awesome fontawesome.com --></div>
        @error('password')
        <div style="font-size: 75%;margin-top: 0.25em;color: #EC1F00;">{{ $message }}</div>
        @enderror  
    </div>
      <div class="row flex-between-center mb-7">
        <div class="col-auto">
          <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked"><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
        </div>
        <div class="col-auto"><a class="fs-9 fw-semibold" href="">Forgot Password?</a></div>
      </div>
      <button wire:loading.remove class="btn btn-primary w-100 mb-3" wire:click="authenticate">Sign In</button>
      <button wire:loading class="btn btn-primary w-100 mb-3">Signing In....</button>
    </div>
  </div>

