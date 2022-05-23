<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - RentX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- header section -->
    <navbar class="navbar py-3 px-5 mb-5" style="background-color: #2055CB;">
        <a href="#"><img src="" alt="RentX" class="ms-4"></a>
        <div class="nav-button me-4">
            <a href="/login"><button class="btn btn-info me-3">Login</button></a>
            <a href="/register"><button class="btn btn-light">Register</button></a>
        </div>
    </navbar>

    <!-- container section -->
    <div class="container">
        <form method="post" action="/register">
            @csrf
            <div style="padding-left: 10rem; padding-right: 10rem;">
                <h1 class="text-center fs-1 mb-3">RentX</h1>
                <div class="rounded p-4" style="background-color: #E7F9FD;">
                    <div class="form-group mb-3">
                        <label for="front-name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">No. Telepon</label>
                        <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" required>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                        <input type="checkbox" onclick="showPass()"> Show Password
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="repassword" class="form-label">Masukan Kembali Password</label>
                        <input type="password" name="repassword" class="form-control @error('repassword') is-invalid @enderror" id="repassword" required>
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
    <br><br><br><br>
    <!-- footer section  -->
    <div class="footer relative-bottom p-1 mt-5" style="background-color: #2055CB;">
        <div class="text-center text-white fs-5">
            <p>Copyright @ 2022 by RentX</p>
        </div>
    </div>

    <!-- custom js file link  -->
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
