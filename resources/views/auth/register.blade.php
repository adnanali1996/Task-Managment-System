@extends('layouts.authentication.master')
@section('content')
    <section>

        <!-- content -->
        <div class="">
            <!-- Register form -->
            <section class="register-form py-md-5 py-3">
                <div class="card card_border p-md-4">
                    <div class="card-body">
                        <!-- form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="register__header text-center mb-lg-5 mb-4">
                                <h3 class="register__title mb-2"> Signup</h3>
                                <p>Create your account here, and continue </p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName" class="input__label">{{ __('Your Name') }}</label>
                                <input type="text" class="form-control login_text_field_bg input-style  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="exampleInputName" aria-describedby="emailHelp" placeholder="" required="" autofocus="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="input__label">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control login_text_field_bg input-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" autocomplete="new-password">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="input__label">{{ __('Password') }}</label>
                                <input type="password" class="form-control login_text_field_bg input-style @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="" required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="input__label">{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control login_text_field_bg input-style" id="password-confirm" name="password_confirmation" placeholder="" required="" autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <div class="form-check check-remember check-me-out">
                                    <input type="checkbox" class="form-check-input checkbox" id="terms" name="terms">
                                    <label class="form-check-label checkmark" for="terms">I agree to the
                                        <a href="#terms">Terms of service</a> and <a href="#privacy">Privacy policy</a> </label>
                                </div>
                                @error('terms')
                                <span class="invalid-feedback" style="display: block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div>
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <button type="submit" class="btn btn-primary btn-style mt-4">Create Account</button>
                                <p class="signup mt-4">Already have an account? <a href="{{ route('login') }}" class="signuplink">Login </a>
                                </p>
                            </div>
                        </form>
                        <!-- //form -->
                        <p class="backtohome mt-4"><a href="{{ route('welcome') }}" class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back to Home </a></p>
                    </div>
                </div>
            </section>

        </div>
        <!-- //content -->

    </section>
@endsection


