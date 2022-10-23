
<form method="POST" action="{{ route('login') }}">
@csrf

    <label for="email">{{ __('Email Address') }}</label>
    <div>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <br />

    <label for="password">{{ __('Password') }}</label>
    <div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <br />

    <div class="checkbox">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">{{ __('Remember Me') }}</label>
    </div>

    <div class="action_btns">
        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
        <div class="one_half last"><button type="submit" class="btn btn_red">{{ __('Login') }}</button></div>
    </div>
</form>
@if (Route::has('password.request'))
    <a class="forgot_password" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
@endif
