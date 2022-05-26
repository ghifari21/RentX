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
                <div>
                    <button class="btn"><i class="fa-regular fa-heart"></i> Simpan</button>
                    <button class="btn btn-icon"><span class="iconify iconify-share" data-icon="ei:share-google"></span>
                        Bagikan</button>
                </div>

            </div>
        </div>

        <div class="col-md"></div>
    </div>

    <div class="row mt-2">
        <!-- Container for the image gallery -->
        <div class="gallery-container col-md">

            <!-- Full-width images with number text -->
            <div class="mySlides">
                <img src="{{ $property->photo_1 }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ $property->photo_2 }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ $property->photo_3 }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ $property->photo_4 }}" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="{{ $property->photo_5 }}" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Thumbnail images -->
            <div class="row mt-2 justify-content-center">
                <div class="column">
                    <img class="demo cursor" src="{{ $property->photo_1 }}" style="width:100%" onclick="currentSlide(1)"
                        alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ $property->photo_2 }}" style="width:100%" onclick="currentSlide(2)"
                        alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ $property->photo_3 }}" style="width:100%" onclick="currentSlide(3)"
                        alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ $property->photo_4 }}" style="width:100%" onclick="currentSlide(4)"
                        alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="{{ $property->photo_5 }}" style="width:100%" onclick="currentSlide(5)"
                        alt="">
                </div>
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

                    <div class="d-flex justify-conten btn-success mt-2t-between">
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

                <a href=""><button class="btn btn-full-width mt-2">Hubungi Pemilik</button></a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="container detail-container">
            <p class="text-larger">Fasilitas yang Didapatkan</p>
            <ul>
                <li>List</li>
                <li>Fasilitas</li>
                <li>yang</li>
                <li>didapatkan</li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="container detail-container">
            <p class="text-larger">Deskripsi</p>
            {!! $property->description !!}
        </div>
    </div>

    <div class="row mt-4">
        <div class="container detail-container">
            <p class="text-larger">Lokasi Kos/Kontrakan</p>

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

    <div class="row mt-4">
        <div class="container detail-container">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-larger">Review</p>
                <a href="/buyers/review/{{$property->slug}}">
                    <button type="submit" class="btn btn-wide">Tambahkan Ulasan</button>
                </a>
            </div>

            <div class="review row">
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

            <div class="review-likes row mb-3">
                <i class="fa-solid fa-thumbs-up" id="like"></i>
            </div>

            <div class="review row">
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

            <div class="review-likes row mb-3">
                <i class="fa-solid fa-thumbs-up" id="like"></i>
            </div>
        </div>
    </div>

    <div class="row mt-4 landing-page-recommendation">
        <h2 class="mb-2">Rekomendasi Kos / Kontrakan</h2>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                {{-- slide 1 --}}
                <div class="swiper-slide">
                    @foreach ($properties->take(5) as $p)
                    <div class="card">
                        <img src="{{ $p->photo_1 }}" class="card-img-top" alt="House">
                        <div class="card-body">
                            <p class="card-text">{{ $p->title }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- slide 2 --}}
                <div class="swiper-slide">
                    @foreach ($properties->skip(5) as $p)
                    <div class="card">
                        <img src="{{ $p->photo_1 }}" class="card-img-top" alt="House">
                        <div class="card-body">
                            <p class="card-text">{{ $p->title }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- slide 3 --}}
                {{-- <div class="swiper-slide">Slide 3</div> --}}
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

</div>

<script src="{{ asset('js2/slideshow-gallery.js') }}"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('js/swiper.js') }}"></script>

<!-- footer section  -->
@include('partials.footer2')
@endsection