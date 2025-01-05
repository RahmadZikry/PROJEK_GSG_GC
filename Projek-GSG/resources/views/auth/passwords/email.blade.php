@extends('layouts.app')

@section('content')
<div class="p-0 container-fluid" style="height: 100vh; background: url('{{ asset('templatemo_569_edu_meeting/assets/images/pcr.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="d-flex justify-content-center align-items-center vh-100" style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4);">
        <div class="p-4 bg-white rounded shadow login-card w-100" style="max-width: 600px;">
            <div class="mb-4 text-center">
                <a href="/" class="logo">
                    <img src="{{ asset('templatemo_569_edu_meeting/assets/images/logo-1.png') }}" style="max-height: 200px; width: 300px; display: flexbox;">
                </a>
                <h4>Reset Your Password</h4>
                <p>Please enter your email address to receive the password reset link.</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary rounded-pill w-100" style="background-color: #43496b; border: none;">
                    Send Password Reset Link
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
