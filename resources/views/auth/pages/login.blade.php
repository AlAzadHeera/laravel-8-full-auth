@extends('auth.app')

@section('title','Login')

@push('css')
@endpush

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger custom-alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="login-wrapper my-auto">
        <h1 class="login-title">Log in</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
            </div>
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
            </div>
            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
        </form>
        <a href="{{ url('/forgot-password') }}" class="forgot-password-link">Forgot password?</a>
        <p class="login-wrapper-footer-text">Don't have an account? <a href="{{ route('register') }}" class="text-reset">Register here</a></p>
    </div>
@endsection

@push('script')
@endpush
