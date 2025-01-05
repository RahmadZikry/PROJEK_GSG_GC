@extends('layouts.app')

@section('content')
<div class="p-0 container-fluid" style="height: 100vh; background: url('{{ asset('templatemo_569_edu_meeting/assets/images/pcr.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="d-flex justify-content-center align-items-center vh-100" style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4);">
        <div class="p-4 bg-white rounded shadow login-card w-100" style="max-width: 600px;">
            <div class="mb-4 text-center">
                <a href="/" class="logo">
                    <img src="{{ asset('templatemo_569_edu_meeting/assets/images/logo-1.png') }}" style="max-height: 200px; width: 300px; display: flexbox;">
                </a>
                <h4>Confirm Your Password</h4>
                <p>Please confirm your password before continuing.</p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="d-flex align-items-center">
                        <input id="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                        <button type="button" class="p-0 btn d-flex align-items-center ms-2" id="togglePassword" style="border: none; background: transparent;">
                            <img src="https://img.icons8.com/ios/20/000000/visible.png" id="passwordIcon" alt="Show Password" />
                        </button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Forgot Password Link -->
                @if (Route::has('password.request'))
                    <div class="mb-3 text-end">
                        <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                @endif

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary rounded-pill w-100" style="background-color: #43496b; border: none;">
                    Confirm Password
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

    togglePassword.addEventListener('click', function () {
        // Toggle tipe input antara password dan text
        const type = password.type === 'password' ? 'text' : 'password';
        password.type = type;

        // Ubah ikon
        passwordIcon.src = type === 'password'
            ? "https://img.icons8.com/ios/20/000000/visible.png" // Show Icon
            : "https://img.icons8.com/ios/20/000000/invisible.png"; // Hide Icon
    });
</script>
@endsection
