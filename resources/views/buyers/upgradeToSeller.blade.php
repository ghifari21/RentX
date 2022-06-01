@extends('buyers.layouts.main')

@section('main-content')
    <div class="row">
        <!-- left side section -->
        @include('buyers.layouts.sidebar')

        <!-- right side section -->
        <div class="col p-3">
            <h1 class="fs-3 fw-bold mb-3">{{ $optionName }}</h1>
            <div class="border border-secondary rounded px-4 py-3" style="overflow-y: auto; height: 61vh">
               <form action="/upgradeToSeller" method="post">
                    <div class="row">
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" required">
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="foto_ktp" class="form-label">Foto KTP</label>
                                <input type="file" name="foto_ktp" class="form-control @error('foto_ktp') is-invalid @enderror" id="foto_ktp" required">
                                @error('foto_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                        <div class="form-group mb-3">
                                <label for="foto_selfie" class="form-label">Foto Selfie</label>
                                <input type="file" name="foto_selfie" class="form-control @error('foto_selfie') is-invalid @enderror" id="foto_selfie" required">
                                @error('foto_selfie')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 py-2">Kirim</button>
               </form>
            </div>
        </div>
    </div>
@endsection

