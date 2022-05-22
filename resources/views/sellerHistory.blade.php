<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kos Saya - RentX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <!-- header section -->
    <navbar class="navbar py-3 px-5 mb-5" style="background-color: #2055CB;">
        <a href="#"><img src="" alt="RentX" class="ms-4"></a>
        <div class="nav-button me-4">
            <i class="fa fa-bell me-2 fs-4"></i>
            <i class="fa fa-envelope me-5 fs-4"></i>
            <i class="fa fa-user fs-3"></i>
        </div>
    </navbar>

    <!-- container section -->
    <div class="container px-5 mb-5">
        <div class="row">
            <!-- left side section -->
            <div class="col-3 p-3">
                <!-- identity section -->
                <div class="row mb-3">
                    <div class="col">
                        <img src="https://media.discordapp.net/attachments/758554583185621042/790106370706898985/131926727_2886493588258144_292419452096811329_n.png" class="rounded img-fluid" alt="Avatar">
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <p class="fw-bold mb-0">Ghifari Octaverin</p>
                            <p class="">mail@gmail.com</p>
                        </div>
                        <div class="row-1">
                            <a href="#"><button class="btn btn-outline-primary">Edit Profile</button></a>
                        </div>
                    </div>
                </div>
                <!-- option section -->
                <div class="row mb-3 border-bottom border-secondary">
                    <div class="col-1">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="col">
                        <a href="/sellerProfile" class="text-black" style="text-decoration: none;"><p>Daftar Kos / Kontrakan</p></a>
                    </div>
                </div>
                <div class="row mb-3 border-bottom border-secondary">
                    <div class="col-1">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <div class="col">
                        <a href="/sellerHistory" class="text-black" style="text-decoration: none;"><p>Riwayat Transaksi</p></a>
                    </div>
                </div>
            </div>

            <!-- right side section -->
            <div class="col p-3">
                <div class="row">
                    <h1 class="fs-3 fw-bold mb-3">Daftar Kos / Kontrakan</h1>
                </div>
                <div class="border border-secondary rounded px-4 py-3" style="overflow-y: auto; height: 61vh">
                    <div class="row border border-secondary rounded p-3 mb-3">
                        <div class="col">
                            <div class="row">
                                <p class="fw-bold mb-0">Kosan Brothel Gerlong Triple X</p>
                                <p class="">Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069</p>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-end flex-column">
                            <div class="row invisible">Invisible</div>
                            <div class="row invisible">Invisible</div>
                            <div class="row">
                                <a href="#"><button class="btn btn-danger mb-0">Hapus</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer section  -->
    <div class="footer fixed-bottom p-1 mt-5" style="background-color: #2055CB;">
        <div class="text-center text-white fs-5">
            <p>Copyright @ 2022 by RentX</p>    
        </div>
    </div>   

    <!-- custom js file link  -->
    <script src="/public/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>