@extends('layouts.auth')

@section('content')
    <h5 class="text-dark fw-bold mb-4">Sign Up</h5>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="mb-1">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                placeholder="Tulis nama kamu" value="{{ old('name') }}" required autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="mb-1">Alamat Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="Tulis alamat email kamu" value="{{ old('email') }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="mb-1">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="Masukkan password kamu" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="mb-1">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button class="btn btn-primary d-block w-100" type="submit">Sign Up</button>
        <p class="mb-0 mt-2 text-secondary text-center">
            Sudah Memiliki Akun? <a href="{{ route('login') }}" class="text-decoration-underline text-primary">Masuk</a>
        </p>
    </form>
@endsection
