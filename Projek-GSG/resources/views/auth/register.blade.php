@extends('layouts.app')

@section('content')
<div class="p-0 m-0 container-fluid">
    <!-- Navbar -->
    <nav class="px-4 bg-white shadow-sm navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <a href="/register" class="logo">
                <img src="templatemo_569_edu_meeting/assets/images/logo-2.png"
                    style="max-height: 200px; width: 200px; display:flexbox;">
            </a>
        </a>
        <div class="ms-auto d-flex align-items-center">
            <select class="border-0 form-select form-select-sm me-2" style="width: auto; box-shadow: none;">
                <option selected>English (United States)</option>
                <option>Bahasa Indonesia</option>
            </select>
            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm">Log in</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="m-0 row g-0" style="height: 100vh;">
        <!-- Kolom Kiri - Form Registrasi -->
        <div class="p-4 col-md-6 d-flex justify-content-center align-items-center bg-light">
            <div style="width: 100%; max-width: 400px;">
                <!-- Header -->
                <div class="mb-4 text-center">
                    <a href="/login" class="logo">
                        <img src="templatemo_569_edu_meeting/assets/images/logo-1.png"
                            style="max-height: 200px; width: 300px; display:flexbox;">
                    </a>
                    <h4>Registrasi User</h4>
                    <p>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Input Name -->
                    <div class="mb-3">
                        <input id="name" type="text" placeholder="Name" class="form-control rounded-pill" name="name" required autofocus>
                    </div>
                    <!-- Input Email -->
                    <div class="mb-3">
                        <input id="email" type="email" placeholder="Email" class="form-control rounded-pill" name="email" required>
                    </div>
                    <!-- Input Password -->
                    <div class="mb-4">
                        <input id="password" type="password" placeholder="Password" class="form-control rounded-pill" name="password" required>
                    </div>
                    <!-- Input Confirm Password -->
                    <div class="mb-4">
                        <input id="password-confirm" type="password" placeholder="Ulangi Password" class="form-control rounded-pill" name="password_confirmation" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-primary rounded-pill" style="background-color: #43496b; border: none;">
                            Register
                        </button>
                    </div>

                    <!-- OR Divider -->
                    <div class="my-3 separator d-flex align-items-center">
                        <hr class="flex-grow-1">
                        <span class="mx-2 text-muted">OR</span>
                        <hr class="flex-grow-1">
                    </div>

                    <!-- Google Button -->
                    <div class="d-grid">
                        <a href="#" class="border btn btn-light rounded-pill d-flex align-items-center justify-content-center">
                            <img src="https://img.icons8.com/color/24/000000/google-logo.png" alt="Google Logo" style="width: 20px; margin-right: 10px;">
                            Continue with Google
                        </a>
                    </div>

                    <!-- Terms -->
                    <p class="mt-3 text-center" style="font-size: 12px;">
                        By signing up, you agree to the <a href="#" style="color: #000000;">Terms of Service</a> and
                        <a href="#" style="color: #000000;">Privacy Policy</a>, including cookie use.
                    </p>
                </form>
            </div>
        </div>

        <!-- Kolom Kanan - Gambar Gedung -->
        <div class="p-0 col-md-6 d-none d-md-block">
            <img src="{{ asset('templatemo_569_edu_meeting/assets/images/pcr.jpg') }}" alt="Gedung Kampus" class="img-fluid" style="height: 100vh; object-fit: cover; width: 100%;">
        </div>
    </div>
</div>
@endsection
