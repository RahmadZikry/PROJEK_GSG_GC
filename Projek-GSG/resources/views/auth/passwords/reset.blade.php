@extends('layouts.app')

@section('content')
<div class="p-0 container-fluid" style="height: 100vh; background: url('{{ asset('templatemo_569_edu_meeting/assets/images/pcr.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="d-flex justify-content-center align-items-center vh-100" style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4);">
        <div class="p-4 bg-white rounded shadow login-card w-100" style="max-width: 600px;">
            <div class="mb-4 text-center">
                <a href="/" class="logo">
                    <img src="{{ asset('templatemo_569_edu_meeting/assets/images/logo-1.png') }}"
                        style="max-height: 200px; width: 300px; display:flexbox;">
                </a>
                <h4>Reset Your Password</h4>
            </div>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Your email</label>
                    <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input id="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter new password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-4">
                    <label for="password-confirm" class="form-label">Confirm New Password</label>
                    <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm new password">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary rounded-pill w-100" style="background-color: #43496b; border: none;">
                    Reset Password
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
