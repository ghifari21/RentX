@extends('sellers.layouts.main')

@section('container')
    <div class="row">
        <!-- left side section -->
        @include('sellers.layouts.sidebar')

        <!-- right side section -->
        <div class="col p-3">
            <div class="row">
                <div class="col">
                    <h1 class="fs-3 fw-bold mb-3">{{ $optionName }}</h1>
                </div>
                <div class="col-9">
                    <a href="#"><button class="btn btn-primary mb-3">Tambah</button></a>
                </div>
            </div>
            <div class="border border-secondary rounded px-4 py-3" style="overflow-y: auto; height: 61vh">
                
                <div class="row border border-secondary rounded p-3 mb-3">
                    <div class="col">
                        <div class="row">
                            <p class="fw-bold mb-0">{{ $propertyName }}</p>
                            <p class="">{{ $propertyAddress }}</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-end flex-column">
                        <div class="row invisible">Invisible</div>
                        <div class="row invisible">Invisible</div>
                        <div class="row">
                            <div class="col">
                                <a href="#"><button class="btn btn-success mb-0">Ubah</button></a>
                                <a href="#"><button class="btn btn-danger mb-0">Hapus</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection