<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RentX</title>
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
    <div class="container" style="padding-left: 10rem; padding-right: 10rem;">
        <form action="">
            <h1 class="text-center fs-1 mb-3">RentX</h1>
            <div class="rounded p-4" style="background-color: #E7F9FD;">
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input id="username" class="form-control" placeholder="Masukkan username anda" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                    <input type="checkbox" onclick="showPass()">Show Password
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2 position-relative bottom-0 start-50 translate-middle-x">Login</button>
            </div>	
        </form>
	</div>

    <!-- footer section  -->
    <div class="footer fixed-bottom p-1 mt-5" style="background-color: #2055CB;">
        <div class="text-center text-white fs-5">
            <p>Copyright @ 2022 by RentX</p>    
        </div>
    </div>

    <!-- custom js file link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        function showPass() {
            var pass = document.getElementById("password");
            if (pass.type === "password") {
                pass.type = "text";
            } else {
                pass.type = "password";
            }
        }
    </script>
</body>
</html>