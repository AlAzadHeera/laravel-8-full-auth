@extends('auth.app')

@section('title','Register')

@push('css')
@endpush

@section('content')
    <div class="login-wrapper my-auto">
        <h1 class="login-title">Register</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
            </div>
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
            </div>
            <div class="form-group mb-4">
                <label for="confirm_password">Confirm Passwor</label>
                <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="confirm password">
            </div>
            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Register">
        </form>
        <p class="login-wrapper-footer-text">Already have an account? <a href="{{ route('login') }}" class="text-reset">Login here</a></p>
    </div>
@endsection

@push('script')
@endpush
