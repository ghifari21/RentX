@extends('buyers.layouts.main')

@section('container')
    <div class="row">
        <!-- left side section -->
        @include('buyers.layouts.sidebar')

        <!-- right side section -->
        <div class="col p-3">
            <h1 class="fs-3 fw-bold mb-3">{{ $optionName }}</h1>
            <div class="border border-secondary rounded px-4 py-3" style="overflow-y: auto; height: 61vh">
                <div class="row border border-secondary rounded p-3 mb-3">
                    <div class="col">
                        <div class="row">
                            <p class="fw-bold mb-0">{{ $propertyName }}</p>
                            <p class="">{{ $propertyAddress }}</p>
                        </div>
                        <div class="row mt-2">
                            <p class="mb-0">{{ $propertyPrice }}</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-end flex-column">
                        <div class="row">
                            <p class="">Durasi: {{ $duration }}</p>
                        </div>
                        <div class="row invisible"><p>Invisible</p></div>
                        <div class="row">
                                <a href="#"><button class="btn btn-danger mb-0">Berhenti Sewa</button></a>
                        </div>
                    </div>
                </div>
                <div class="row border border-secondary rounded p-3 mb-3">
                    <div class="col">
                        <div class="row">
                            <p class="fw-bold mb-0">Kosan Brothel Gerlong Triple X</p>
                            <p class="">Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069</p>
                        </div>
                        <div class="row mt-2">
                            <p class="mb-0">Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-end flex-column">
                        <div class="row">
                            <p class="">Durasi: 21/06/2022 - 32/13/2069</p>
                        </div>
                        <div class="row invisible"><p>Invisible</p></div>
                        <div class="row">
                                <a href="#"><button class="btn btn-danger mb-0">Berhenti Sewa</button></a>
                        </div>
                    </div>
                </div>
                <div class="row border border-secondary rounded p-3 mb-3">
                    <div class="col">
                        <div class="row">
                            <p class="fw-bold mb-0">Kosan Brothel Gerlong Triple X</p>
                            <p class="">Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069</p>
                        </div>
                        <div class="row mt-2">
                            <p class="mb-0">Rp 1.000.000</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-end flex-column">
                        <div class="row">
                            <p class="">Durasi: 21/06/2022 - 32/13/2069</p>
                        </div>
                        <div class="row invisible"><p>Invisible</p></div>
                        <div class="row">
                                <a href="#"><button class="btn btn-danger mb-0">Berhenti Sewa</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection