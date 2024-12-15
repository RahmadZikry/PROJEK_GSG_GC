@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style="height: 100vh; background: url('{{ asset('templatemo_569_edu_meeting/assets/images/pcr.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="d-flex justify-content-center align-items-center vh-100" style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4);">
        <div class="login-card p-4 shadow rounded bg-white w-100" style="max-width: 600px;">
            <div class="text-center mb-4">
                <h2 class="logo" style="color: #004D99; font-weight: bold;">Politeknik Caltex Riau</h2>
                <h4>Log in User</h4>
                <p>Don’t have an account? <a href="{{ route('register') }}" class="text-primary">Sign up</a></p>
            </div>

            <!-- Login with Google -->
            <div class="d-flex justify-content-center mb-3">
                <a href="{{ url('/auth/google') }}" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center">
                    <img src="https://img.icons8.com/color/24/000000/google-logo.png" class="me-2" alt="Google Logo" />
                    Log in with Google
                </a>
            </div>

            <!-- OR Separator -->
            <div class="separator d-flex align-items-center my-3">
                <hr class="flex-grow-1">
                <span class="mx-2 text-muted">OR</span>
                <hr class="flex-grow-1">
            </div>

            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Your email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Your password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">👁</button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Forgot your password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100" style="background-color: #4A4E69; border: none;">
                    Log in
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
