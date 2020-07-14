@extends('layouts.authentication.master')

@section('content')
<section>

    <!-- content -->
    <div class="">
        <!-- login form -->
        <section class="login-form py-md-5 py-3">
            <div class="card card_border p-md-4">
                <div class="card-body">
                    <!-- form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="login__header text-center mb-lg-5 mb-4">
                            <h3 class="login__title mb-2"> Login</h3>
                            <p>Welcome back, login to continue</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">{{ __('E-Mail Address') }}</label>
                            <input type="text" class="form-control login_text_field_bg input-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="" autofocus="">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <button type="submit" class="btn btn-primary btn-style mt-4"> {{ __('Send Password Reset Link') }}</button>
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
