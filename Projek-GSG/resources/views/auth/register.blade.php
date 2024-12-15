@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 m-0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 shadow-sm">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-top">
            <span class="fw-bold ms-2" style="color: #1C7ED6;">Politeknik <span style="color: #FF0000;">Caltex Riau</span></span>
        </a>
        <div class="ms-auto d-flex align-items-center">
            <select class="form-select form-select-sm me-2 border-0" style="width: auto; box-shadow: none;">
                <option selected>English (United States)</option>
                <option>Bahasa Indonesia</option>
            </select>
            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm">Log in</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="row m-0 g-0" style="height: 100vh;">
        <!-- Kolom Kiri - Form Registrasi -->
        <div class="col-md-6 d-flex justify-content-center align-items-center bg-light p-4">
            <div style="width: 100%; max-width: 400px;">
                <!-- Header -->
                <div class="text-center mb-4">
                    <h2 class="logo" style="color: #004D99; font-weight: bold;">Politeknik Caltex Riau</h2>
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
                    <div class="mb-3">
                        <input id="password" type="password" placeholder="Password" class="form-control rounded-pill" name="password" required>
                    </div>
                    <!-- Input Confirm Password -->
                    <div class="mb-4">
                        <input id="password-confirm" type="password" placeholder="Ulangi Password" class="form-control rounded-pill" name="password_confirmation" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary rounded-pill" style="background-color: #5567FF; border: none;">
                            Log in
                        </button>
                    </div>

                    <!-- OR Divider -->
                    <div class="separator d-flex align-items-center my-3">
                        <hr class="flex-grow-1">
                        <span class="mx-2 text-muted">OR</span>
                        <hr class="flex-grow-1">
                    </div>

                    <!-- Google Button -->
                    <div class="d-grid">
                        <a href="#" class="btn btn-light border rounded-pill d-flex align-items-center justify-content-center">
                            <img src="https://img.icons8.com/color/24/000000/google-logo.png" alt="Google Logo" style="width: 20px; margin-right: 10px;">
                            Continue with Google
                        </a>
                    </div>

                    <!-- Terms -->
                    <p class="text-center mt-3" style="font-size: 12px;">
                        By signing up, you agree to the <a href="#" style="color: #1C7ED6;">Terms of Service</a> and
                        <a href="#" style="color: #1C7ED6;">Privacy Policy</a>, including cookie use.
                    </p>
                </form>
            </div>
        </div>

        <!-- Kolom Kanan - Gambar Gedung -->
        <div class="col-md-6 d-none d-md-block p-0">
            <img src="{{ asset('templatemo_569_edu_meeting/assets/images/pcr.jpg') }}" alt="Gedung Kampus" class="img-fluid" style="height: 100vh; object-fit: cover; width: 100%;">
        </div>
    </div>
</div>
@endsection
