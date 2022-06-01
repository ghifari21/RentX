@extends('layouts.main')

@section('main-content')
<!-- navbar section -->
@include('partials.navbar2')
<div class="container">
    <div class="row">
        <div class="col-md">
            <p class="detail-product-title">{{ $property->title }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-larger">Lokasi</p> <!-- Need to change this later -->
            </div>
        </div>
        <div class="col-md"></div>
    </div>

    <div class="row mt-2">
        <div class="col-md">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ $property->photo_1 }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $property->photo_2 }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $property->photo_3 }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $property->photo_4 }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ $property->photo_5 }}" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md">
            <div class="container detail-container mb-3">
                <p class="text-larger">Rp {{ $property->price }} / Bulan</p>
                <form action="/buyers/order/{{ $property->slug }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="mb-2">

                            <label class="text-larger" for="duration">Durasi Sewa</label>
                            <input type="number" class="form-control" name="duration" id="duration">

                            <!-- <select class="form-select" name="duration" id="duration">
                                <option value="">Pilih Durasi Sewa</option>
                            </select> -->
                        </div>

                        <div class="mb-2">
                            <label class="text-larger" for="checkIn">Pilih Waktu Masuk</label>
                            <input type="date" class="form-control" name="check_in" id="checkIn">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="text-larger">Harga Sewa Per Durasi</p>
                        <p class="text-larger">Rp {{ $property->price }} / Durasi</p>
                    </div>

                    <!-- <div class="d-flex justify-content-between">
                            <p class="text-larger text-bolder">Total Pembayaran</p>
                            <p class="text-larger text-bolder">Rp XXX.XXX.XXX</p>
                        </div> -->

                    <div class="d-flex justify-conten btn-success mb-2">
                        <label class="text-larger" for="total_payment">Bayar</label>
                        <input type="number" class="form-control" name="total_payment" id="total_payment">
                    </div>

                    <!-- check status properti available ato engga!-->
                    {{-- @if() --}}
                    <button class="btn btn-full-width btn-success" type="submit">Ajukan Sewa</button>
            </div>
            </form>

            <div class="container detail-container">
                <p class="text-larger mb-auto">Profil Pemilik</p>

                <div class="d-flex align-items-center">
                    <i class="iconify detail-profile-icon" data-icon="healthicons:ui-user-profile"></i>
                    <div class="container">
                        <p class="text-larger mb-auto">Nama btn-info emilik</p>
                        <p class="text-larger mb-auto">Status (Online / Terakhir Online)</p>
                    </div>
                </div>

                <a href=""><button class="btn btn-full-width btn-outline-primary mt-2">Hubungi Pemilik</button></a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <h2>Deskripsi</h2>
        <div class="container detail-container border border-secondary rounded p-2">
            {!! $property->description !!}
        </div>
    </div>

    <!-- ========= BAGIAN LOKASI ========= -->
    <div class="row mt-4">
        <h2>Lokasi Kos/Kontrakan</h2>
        <div class="container detail-container border border-secondary rounded p-2">
            <div class="row">
                <div class="col-md">
                    <p>
                        {{ $property->address }}
                    </p>
                </div>

                <div class="col-md">
                    <iframe src="{{ $property->link_location }}" width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- ========= BAGIAN REVIEW ========= -->
    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2>Review</h2>
            <a href="/buyers/review/{{$property->slug}}">
                <button type="submit" class="btn btn-wide btn-success">Tambahkan Ulasan</button>
            </a>
        </div>
        <div class="container detail-container border border-secondary rounded p-3">

            <div class="review row border rounded  p-2 mb-2">
                <div class="col-md-4 d-flex align-items-center">
                    <i class="iconify detail-profile-icon" data-icon="healthicons:ui-user-profile"></i>
                    <div class="container">
                        <p class="mb-auto">Nama</p>
                        <p class="mb-auto">DD/MM/YYY</p>
                    </div>
                </div>

                <div class="col-md-8 review-border">
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star"></span>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, iusto nam! Qui eaque, hic
                        enim doloremque facere atque voluptatibus nisi numquam illum debitis totam, nihil eos maiores
                        natus inventore illo.</p>
                </div>
            </div>

            <div class="review row border rounded p-2 mb-2">
                <div class="col-md-4 d-flex align-items-center">
                    <i class="iconify detail-profile-icon" data-icon="healthicons:ui-user-profile"></i>
                    <div class="container">
                        <p class="mb-auto">Nama</p>
                        <p class="mb-auto">DD/MM/YYY</p>
                    </div>
                </div>

                <div class="col-md-8 review-border">
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star star-checked"></span>
                    <span class="fa fa-star"></span>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, iusto nam! Qui eaque, hic
                        enim doloremque facere atque voluptatibus nisi numquam illum debitis totam, nihil eos maiores
                        natus inventore illo.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="row">
            <div class="col-8">
                <h2 class="mb-3">Rekomendasi Kos / Kontrakan</h3>
            </div>
            <div class="col text-end">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-evenly">
                            @foreach ($properties->take(5) as $p)
                            <div class="col-md-2 mb-3">
                                <div class="card">
                                    <img src="{{ $p->photo_1 }}" class="img-fluid" alt="House">
                                    <div class="card-body">
                                        <p class="card-text">{{ $p->title }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex justify-content-evenly">
                            @foreach ($properties->skip(5) as $p)
                            <div class="col-md-2 mb-3">
                                <div class="card">
                                    <img src="{{ $p->photo_1 }}" class="img-fluid" alt="House">
                                    <div class="card-body">
                                        <p class="card-text">{{ $p->title }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>     
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!-- footer section  -->
@include('partials.footer2')
@endsection