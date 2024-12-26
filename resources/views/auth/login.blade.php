@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg" style="width: 800px; border-radius: 20px; overflow: hidden;">
        <div class="row g-0">
            <!-- Right Side (Welcome Section) -->
            <div class="col-md-6 bg-primary text-white text-center d-flex flex-column justify-content-center align-items-center" style="padding: 30px;">
                <h3 class="fw-bold">Hello, Kaum Untirta</h3>
                <p class="mt-3">Silahkan Daftar, Apabila belum melakukan Pendaftaran.</p>
                <a href="{{ route('register') }}" class="btn btn-outline-light mt-3 px-4 py-2" style="border-radius: 20px;">Daftar</a>
            </div>

            <!-- Left Side (Login Section) -->
            <div class="col-md-6 bg-white p-5">
                <h3 class="text-center fw-bold mb-4">Masuk</h3>

                <!-- Social Media Icons -->
                <div class="d-flex justify-content-center gap-3 mb-4">
                    <button class="btn btn-outline-secondary rounded-circle">
                    </button>
                    <button class="btn btn-outline-secondary rounded-circle">
                    </button>
                    <button class="btn btn-outline-secondary rounded-circle">
                    </button>
                </div>

                <p class="text-center text-muted mb-4">Gunakan Email yang sama, pada saat mendaftar</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email -->
                    <div class="mb-3">
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                        @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Forgot Password -->
                    <div class="mb-3 text-end">
                        <a href="{{ route('password.request') }}" class="text-decoration-none">Lupa Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" style="border-radius: 20px;">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
