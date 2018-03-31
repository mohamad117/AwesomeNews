@extends('admin.layouts.authMaster')

@section('title','Login')
@section('content')
    <div id="login" class="animate form">
        <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1>Login Form</h1>
                <div>
                    <input type="email" name="email"
                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required=""/>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           placeholder="Password" required=""/>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox"
                               name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>
                <div>
                    <button type="submit" class="btn btn-default">Log in</button>
                    <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">

                    <p class="change_link">New to site?
                        <a href="{{ route('register') }}" class="to_register"> Create Account </a>
                    </p>
                    <div class="clearfix"></div>
                    <br/>
                    <div>
                        <h1><i class="fa fa-paw" style="font-size: 26px;"></i> {{ config('app.name') }}</h1>
                    </div>
                </div>
            </form>
            <!-- form -->
        </section>
        <!-- content -->
    </div>
@endsection