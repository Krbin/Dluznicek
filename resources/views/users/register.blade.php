<div class="modal fade mt-5" id="modalSignUpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark text-light">


            <form action="/users" method="post">
                @csrf
                <div class="modal-body mx-3 mt-4">
                    <div class="md-form mb-2">
                        <input type="email" id="defaultForm-email"
                            class="form-control bg-dark text-light validate @error('email') border-danger  @enderror"
                            name="email"
                            placeholder="@if ($errors->has('email')) @error('email') {{ $message }} @enderror @else email @endif"
                            value="{{ old('email') }}">

                    </div>


                    <div class="md-form mb-2">
                        <input type="text" id="defaultForm-username"
                            class="form-control bg-dark text-light validate @error('name') border-danger  @enderror"
                            name="name"
                            placeholder="@if ($errors->has('name')) @error('name') {{ $message }} @enderror @else username @endif"
                            value="{{ old('name') }}">
                    </div>


                    <div class="md-form mb-2">
                        <input type="password" id="defaultForm-pass"
                            class="form-control bg-dark text-light validate @error('password') border-danger  @enderror"
                            name="password"
                            placeholder="@if ($errors->has('password')) @error('password') {{ $message }} @enderror @else password @endif"
                            value="{{ old('password') }}">
                    </div>


                    <div class="md-form mb-2">
                        <input type="password" id="password-confirmation"
                            class="form-control bg-dark text-light validate @error('password_confirmation') border-danger  @enderror"
                            name="password_confirmation"
                            placeholder="@if ($errors->has('password_confirmation')) @error('password_confirmation') {{ $message }} @enderror @else confirm password @endif">
                    </div>
                </div>


                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success">sign up</button>
                    <button type="button" class="btn btn-default text-light btn-outline-secondary" data-dismiss="modal"
                        aria-label="Close">
                        close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#modalSignUpForm"> sign up</a>
</div>
