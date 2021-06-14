@extends('auth.app')

@section('title','Login')

@push('css')
@endpush

@section('content')
    <div class="login-wrapper my-auto">
        <h1 class="login-title">Please Verify Your Email Address.</h1>
        <p>Check your inbox to verify your email address. A verification E-Mail has been sent to your E-Mail address.</p>
        <small class="mb-4">Didn't receive E-Mail?</small>
        <form action="{{ url('/email/verification-notification') }}" method="POST">
            @csrf
            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Resend Email">
        </form>
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                A new email verification link has been emailed to you!
            </div>
        @endif
    </div>
@endsection

@push('script')
@endpush
