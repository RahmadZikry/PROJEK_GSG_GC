@extends('layouts.app')

@section('content')
<div class="p-0 container-fluid" style="height: 100vh; background: url('{{ asset('templatemo_569_edu_meeting/assets/images/pcr.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="d-flex justify-content-center align-items-center vh-100" style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4);">
        <div class="p-4 bg-white rounded shadow login-card w-100" style="max-width: 600px;">
            <div class="mb-4 text-center">
                <a href="/login" class="logo">
                    <img src="templatemo_569_edu_meeting/assets/images/logo-1.png"
                        style="max-height: 200px; width: 300px; display:flexbox;">
                </a>
                <h4>Log in User</h4>
                <p>Don’t have an account? <a href="{{ route('register') }}" class="text-primary">Sign up</a></p>
            </div>

            <!-- Login with Google -->
            <div class="mb-3 d-flex justify-content-center">
                <a href="{{ url('/auth/google') }}" class="btn btn-outline-secondary rounded-pill w-100 d-flex align-items-center justify-content-center">
                    <img src="https://img.icons8.com/color/24/000000/google-logo.png" class="me-2" alt="Google Logo" />
                    Log in with Google
                </a>
            </div>

            <!-- OR Separator -->
            <div class="my-3 separator d-flex align-items-center">
                <hr class="flex-grow-1">
                <span class="mx-2 text-muted">OR</span>
                <hr class="flex-grow-1">
            </div>

            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Your email</label>
                    <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="password" class="mb-0 form-label">Your password</label>
                        <button type="button" class="p-0 btn d-flex align-items-center" id="togglePassword" style="border: none; background: transparent;">
                            <img src="https://img.icons8.com/ios/20/000000/visible.png" id="passwordIcon" alt="Show Password" />
                            <span id="toggleText" class="ms-1">Show</span>
                        </button>
                    </div>
                    <input id="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="mb-3 d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Forgot your password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary rounded-pill w-100" style="background-color: #43496b; border: none;">
                    Log in
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Password Toggle Script -->
<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const passwordIcon = document.getElementById('passwordIcon');
    const toggleText = document.getElementById('toggleText');

    togglePassword.addEventListener('click', function () {
        // Toggle tipe input antara password dan text
        const type = password.type === 'password' ? 'text' : 'password';
        password.type = type;

        // Ubah ikon dan teks
        if (type === 'password') {
            passwordIcon.src = "https://img.icons8.com/ios/20/000000/visible.png"; // Show Icon
            toggleText.textContent = "Show";
        } else {
            passwordIcon.src = "https://img.icons8.com/ios/20/000000/invisible.png"; // Hide Icon
            toggleText.textContent = "Hide";
        }
    });
</script>
@endsection
