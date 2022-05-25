@extends('layouts.main')

<!-- header section -->
@include('partials.navbar')

<!-- container section -->
<div class="container">
    <form method="post" action="">
        @csrf
        <div style="padding-left: 10rem; padding-right: 10rem;">
            <h1 class="text-center fs-1 mb-3">Edit Profile</h1>
            <div class="rounded p-4" style="background-color: #E7F9FD;">
                <div class="form-group mb-3">
                    <label for="front-name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $name) }}" required">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label">No. Telepon</label>
                    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone', $phone) }}" required>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $email) }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username', $username) }}" required>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password', $password) }}" required>
                    <input type="checkbox" onclick="showPass()"> Show Password
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="repassword" class="form-label">Masukan Kembali Password</label>
                    <input type="password" name="repassword" class="form-control @error('repassword') is-invalid @enderror" id="repassword" value="{{ old('repassword', $repassword) }}" required>
                    <input type="checkbox" onclick="showPassAgain()"> Show Password
                    @error('repassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2 position-relative bottom-0 start-50 translate-middle-x">Register</button>
            </div>
        </div>
    </form>
</div>
<br>

<!-- footer section  -->
@include('partials.footer2')
