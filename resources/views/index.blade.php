@extends('layouts.main')

@section('main-content')
	<!-- navbar section -->
	@include('partials.navbar2')

	<div class="container">
		<div class="landing-page-search">
			<h4>Cari Kos / Kontrakan</h4>

			<div class="form-inline">
				<input class="form-control mb-2 mr-sm-2" id="search-input" placeholder="Cari kos yang anda inginkan">
				<button type="submit" class="btn btn-primary mb-2">Cari</button>
			</div>
		</div>

		<div class="landing-page-recommendation">
			<h2 class="mt-4 mb-3">Rekomendasi Kos / Kontrakan</h2>

			<!-- Slider main container -->
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
          <!-- Slides -->
          {{-- slide 1 --}}
          <div class="swiper-slide">
              @foreach ($properties->take(5) as $property)
              <div class="card">
                  <img src="{{ $property->photo_1 }}" class="card-img-top" alt="House" style="width: 100%;">
                  <div class="card-body">
                    <p class="card-text">{{ $property->title }}</p>
                  </div>
              </div>
              @endforeach
          </div>

          {{-- slide 2 --}}
          <div class="swiper-slide">
              @foreach ($properties->skip(5) as $property)
              <div class="card">
                  <img src="{{ $property->photo_1 }}" class="card-img-top" alt="House">
                  <div class="card-body">
                    <p class="card-text">{{ $property->title }}</p>
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

		<div class="landing-page-area">
			<h2 class="mt-4 mb-2">Area Kos / Kontrakan Populer</h2>

			<div class="center">
            <div class="area-card">
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

            <button class="btn btn-primary">Lihat Lainnya</button>
      </div>
    </div>
	</div>

	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/swiper.js') }}"></script>

    <!-- footer section  -->
    @include('partials.footer2')
@endsection
