@extends('layouts.main')

@section('main-content')
    <!-- navbar section -->
    @include('partials.navbar2')

    <div class="container">
        <div class="">
			<form action="/search" class="form-inline">
				<input class="form-control mb-2 mr-sm-2" id="search-input" name="search" placeholder="Cari kos yang anda inginkan">
				<button type="submit" class="btn btn-primary mb-2">Cari</button>
			</form>
		</div>
        <div class="filter filter-outer">
            <ul class="filter filter-inner">
                <a href="#"><li class="filter-item">Rekomendasi</li></a>
                <a href="#"><li class="filter-item">Harga</li></a>
                <a href="#"><li class="filter-item">Jenis</li></a>
                <a href="#"><li class="filter-item">Tipe</li></a>
            </ul>
        </div>

        <div class="container mt-3" style="overflow-y: auto; height: 120vh">
            @foreach ($properties as $property)
            <a href="/property/{{ $property->slug }}" class="text-black" style="text-decoration: none;">
                <div class="card card-browse">
                    <div class="row">
                        <div class="col">
                            <img src="{{ $property->photo_1 }}" class="card-img-browse" height="208" width="300" alt="{{ $property->title }}">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="card-content-star">
                                        <i class="fa-regular fa-star"></i>
                                        <h6 class="card-text browse-rating-text">Nilai Bintang</h6>
                                    </div>
                                    <div class="card-content-detail">
                                        <p class="card-text card-content-detail-name">{{ $property->title }}</p>
                                        <p class="card-text card-content-detail-location">{{ $property->address }}</p>
                                    </div>
                                    <div class="card-content-detail">
                                        <p class="card-text card-content-detail-name">Rp {{ $property->price }} / bulan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        
        @endforeach -->
        <div class="d-flex mt-4 justify-content-end">
            {{ $properties->links() }}
        </div>
    </div>

    <!-- footer section  -->
    @include('partials.footer2')
@endsection
