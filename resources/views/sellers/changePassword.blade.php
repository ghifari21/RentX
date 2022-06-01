@extends('layouts.main')

<!-- navbar section -->
@include('partials.navbar2')

<!-- container section -->
<div class="container" style="padding-left: 10rem; padding-right: 10rem;">
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <form action="/seller/dashboard/change-password/{{ auth()->user()->username }}" method="POST">
        @method('put')
        @csrf
        <h1 class="text-center fs-1 mb-3">Ubah Password</h1>
        <div class="rounded p-4" style="background-color: #E7F9FD;">
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username anda" required value="{{ old('username') }}" autofocus>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="old_password" class="form-label">Password Lama</label>
                <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Masukkan password anda saat ini" required>
                <input type="checkbox" onclick="showPass()"> Show Password
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password Baru</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password baru anda" required>
                <input type="checkbox" onclick="showPassAgain()"> Show Password
            </div>
            <div class="form-group mb-3">
                <label for="re_password" class="form-label">Masukan Kembali Password Baru</label>
                <input type="password" name="re_password" class="form-control" id="re_password" placeholder="Masukkan kembali password baru anda" required>
                <input type="checkbox" onclick="showPassAgain()"> Show Password
            </div>
            <button type="submit" class="btn btn-primary px-5 py-2 position-relative bottom-0 start-50 translate-middle-x">Ganti Password</button>
        </div>
    </form>
</div>

<!-- footer section  -->
@include('partials.footer')
