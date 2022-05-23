@extends('layouts.main')
memek
@section('main-content')
    <!-- navbar section -->
    @include('partials.navbar2')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <p class="detail-product-title">Nama Product</p>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-larger">Lokasi</p>
                    <div>
                        <button class="btn"><i class="fa-regular fa-heart"></i> Simpan</button>
                        <button class="btn btn-icon"><span class="iconify iconify-share" data-icon="ei:share-google"></span> Bagikan</button>
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
                    <img src="img/placeholder.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="img/placeholder.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="img/placeholder.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="img/placeholder.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="img/placeholder.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img src="img/placeholder.jpg" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Thumbnail images -->
                <div class="row mt-2">
                <div class="column">
                    <img class="demo cursor" src="img/placeholder.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/placeholder.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/placeholder.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/placeholder.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/placeholder.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/placeholder.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
                </div>
                </div>
            </div>

            <div class="col-md">
                <div class="container detail-container mb-3">
                    <p class="text-larger">Rp XXX.XXX.XXX / Bulan</p>

                    <div class="form-group">
                        <div class="mb-2">
                            <label class="text-larger" for="duration">Durasi Sewa</label>
                            <select class="form-select" name="duration" id="duration">
                                <option value="">Pilih Durasi Sewa</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label class="text-larger" for="checkIn">Pilih Waktu Masuk</label>
                            <input type="date" class="form-control" name="checkIn" id="checkIn">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="text-larger">Harga Sewa Per Durasi</p>
                        <p class="text-larger">Rp XXX.XXX.XXX / Durasi</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="text-larger text-bolder">Total Pembayaran</p>
                        <p class="text-larger text-bolder">Rp XXX.XXX.XXX</p>
                    </div>

                    <button class="btn btn-full-width" type="submit">Ajukan Sewa</button>
                </div>

                <div class="container detail-container">
                    <p class="text-larger mb-auto">Profil Pemilik</p>

                    <div class="d-flex align-items-center">
                        <i class="iconify detail-profile-icon" data-icon="healthicons:ui-user-profile"></i>
                        <div class="container">
                            <p class="text-larger mb-auto">Nama Pemilik</p>
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
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Nunc eget iaculis lectus. Fusce sodales nisl
                    eu elit dapibus, eu ornare odio fringilla. In hac
                    habitasse platea dictumst. Etiam finibus ipsum a
                    nibh varius cursus. Nunc gravida, odio vitae malesuada
                    volutpat, ante dolor ultricies justo, in consequat leo
                    urna non sapien. Proin et placerat risus, ac pharetra
                    nibh. In gravida fringilla pretium. Aliquam a justo
                    accumsan, porta metus eu, vulputate ligula.
                </p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="container detail-container">
                <p class="text-larger">Lokasi Kos/Kontrakan</p>

                <div class="row">
                    <div class="col-md">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Assumenda nulla earum necessitatibus. Ad nisi
                            numquam libero possimus architecto doloremque soluta
                            commodi suscipit, vero ab ducimus eligendi saepe
                            aliquam molestiae voluptas.
                        </p>
                    </div>

                    <div class="col-md">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.982658340905!2d107.5943499!3d-6.8611339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee36226510a79e76!2sUniversitas%20Pendidikan%20Indonesia!5e0!3m2!1sen!2sid!4v1653257032700!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="container detail-container">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-larger">Review</p>
                    <button class="btn btn-wide">Tambahkan Ulasan</button>
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

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, iusto nam! Qui eaque, hic enim doloremque facere atque voluptatibus nisi numquam illum debitis totam, nihil eos maiores natus inventore illo.</p>
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

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, iusto nam! Qui eaque, hic enim doloremque facere atque voluptatibus nisi numquam illum debitis totam, nihil eos maiores natus inventore illo.</p>
                    </div>
                </div>

                <div class="review-likes row mb-3">
                    <i class="fa-solid fa-thumbs-up" id="like"></i>
                </div>
            </div>
        </div>

        <div class="row-mt-4 landing-page-recommendation">
			<h2 class="mb-2">Rekomendasi Kos / Kontrakan</h2>

			<!-- Slider main container -->
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
                    <!-- Slides -->
                    {{-- slide 1 --}}
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    {{-- slide 2 --}}
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
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

    <script src="js/slideshow-gallery"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>

    <!-- footer section  -->
    @include('partials.footer2')
@endsection
