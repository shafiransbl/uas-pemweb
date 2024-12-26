@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg" style="width: 800px; border-radius: 20px; overflow: hidden;">
        <div class="row g-0">
            <!-- Left Side (Welcome Section) -->
            <div class="col-md-6 bg-primary text-white text-center d-flex flex-column justify-content-center align-items-center" style="padding: 30px;">
                <h3 class="fw-bold">Terhubung Kembali</h3>
                <p class="mt-3">Sudah buat akun? Silahkan lewat sini.</p>
                <a href="{{ route('login') }}" class="btn btn-outline-light mt-3 px-4 py-2" style="border-radius: 20px;">Masuk</a>
            </div>

            <!-- Right Side (Register Section) -->
            <div class="col-md-6 bg-white p-5">
                <h3 class="text-center fw-bold mb-4">Daftar</h3>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
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

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <!-- Hidden Role Field (Optional, jika diperlukan untuk role) -->
                    <input type="hidden" name="role" value="user">

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" style="border-radius: 20px;">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
