@extends('admin.layouts.authMaster')

@section('title','Register')
@section('content')
    <div id="login" class="animate form">
        <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h1>Create Account</h1>
                <div>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}"
                           required=""/>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"
                           required=""/>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div>
                    <input type="password" class="form-control" name="password_confirmation"
                           placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn btn-default submit">Register</button>
                <div class="clearfix"></div>
                <div class="separator">

                    <p class="change_link">Already a member ?
                        <a href="{{ route('login') }}" class="to_register"> Log in </a>
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