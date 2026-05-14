@extends('layouts.guest')

@section('content')

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success mb-3">
            {{ session('status') }}
        </div>
    @endif

    <h4 class="text-center mb-4 fw-bold">
        Login
    </h4>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">
                Email
            </label>

            <input
                id="email"
                type="email"
                name="email"
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
            >

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">
                Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                required
                autocomplete="current-password"
            >

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
            <input
                class="form-check-input"
                type="checkbox"
                name="remember"
                id="remember_me"
            >

            <label class="form-check-label" for="remember_me">
                Remember me
            </label>
        </div>

        <!-- Forgot Password -->
        <div class="mb-3 text-end">
            @if (Route::has('password.request'))
                <a
                    href="{{ route('password.request') }}"
                    class="text-decoration-none"
                >
                    Forgot your password?
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">
                Log in
            </button>
        </div>
    </form>

@endsection