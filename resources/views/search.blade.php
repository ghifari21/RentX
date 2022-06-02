@extends('layouts.main')

@section('main-content')
<!-- navbar section -->
@include('partials.navbar2')

<div class="container mt-5">
    <div class="">
        <form action="/search" class="gap-4">
            <div class="form-inline">
                <input class="form-control mb-2 mr-sm-2" id="search-input" name="search" placeholder="Cari kos yang anda inginkan">
                <button type="submit" class="btn btn-primary mb-2">Cari</button>
            </div>
            <div class="form-inline">
                <ul class="list-group list-group-horizontal gap-2" style="list-style: none; border: none;">
                    <li class="">
                        <button type="submit" name="recommendation" id="recommendation" class="btn btn-primary rounded">Rekomendasi</button>
                    </li>
                    <li class="">
                        <button type="submit" name="price" id="price" class="btn btn-primary rounded">Harga</button>
                    </li>
                    <li class="">
                        <!-- <button type="submit" name="rent_for" id="rent_for" class="btn btn-primary rounded">Jenis</button> -->
                        <button class="btn btn-primary dropdown-toggle" type="button" name="rent_for" id="rent_for" data-bs-toggle="dropdown" aria-expanded="false">Jenis</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Putra</a></li>
                            <li><a class="dropdown-item" href="#">Putri</a></li>
                            <li><a class="dropdown-item" href="#">Campur</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <!-- <button type="submit" name="price" id="price" class="btn btn-primary rounded">Tipe</button> -->
                        <button class="btn btn-primary dropdown-toggle" type="button" name="price" id="price" data-bs-toggle="dropdown" aria-expanded="false">Tipe</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kos</a></li>
                            <li><a class="dropdown-item" href="#">Kontrakan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </form>
    </div>

    <div class="container mt-3">
        @foreach ($properties as $property)
        <a href="/property/{{ $property->slug }}" class="text-black" style="text-decoration: none;">
            <div class="card card-browse">
                <div class="row">
                    <div class="col">
                        <img src="{{ $property->photo_1 }}" class="card-img-browse" height="208" width="300">
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


    <div class="d-flex mt-4 justify-content-end">
        {{ $properties->links() }}
    </div>
</div>

<!-- divider -->
<div class="row" style="background-color:white; height: 150px; width: 10px;"></div>

<!-- footer section  -->
@include('partials.footer2')
@endsection