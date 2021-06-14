@extends('auth.app')

@section('title','Forget Password')

@push('css')
@endpush

@section('content')
    <div class="login-wrapper my-auto">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                <h1 class="login-title" style="text-transform: capitalize;">{{ session('status') }}</h1>
            </div>
        @else

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/forgot-password') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
                <small>Enter Your E-Mail Address So That We Can Send You A Password Reset Link.</small>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Send Link">
        </form>
            <p class="login-wrapper-footer-text">Want to login to your account? <a href="{{ route('login') }}" class="text-reset">Login here</a></p>
        @endif
    </div>
@endsection

@push('script')
@endpush
