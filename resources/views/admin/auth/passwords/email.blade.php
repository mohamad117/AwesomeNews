@extends('admin.layouts.authMaster')

@section('title','Reset')
@section('content')
    <section class="login_content">
        <form>
            <h1>Forgot Password Form</h1>
            <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
                <a class="btn btn-default submit" href="{{ route('password.email') }}">Send Email</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

                <p class="change_link">Remember your Password?
                    <a href="{{ route('login') }}" class="to_register"> try login </a>
                </p>
                <div class="clearfix"></div>
                <br />
            </div>
        </form>
        <!-- form -->
    </section>
@endsection
