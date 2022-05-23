@extends('layouts.main')

@section('main-content')
    <!-- navbar section -->
    @include('partials.navbar')

    <div class="container px-5 mb-5">
        <h4 class="fw-bold">Tambah Kos / Kontrakan</h4>

        <!-- ================================
              vvvv  MASIH BELUM BERES   vvvv  -->
    <form action="/seller/dashboard/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="add-rentplace border border-3 test rounded p-3 mt-4">
            <p class="add-rentplace-label fw-bold">Foto Kos / Kontrakan</p>
            <div class="d-flex text-center gap-5">
                <input type="hidden" value="https://source.unsplash.com/300x300?house" name="photo_1">
                <input type="hidden" value="https://source.unsplash.com/300x300?house" name="photo_2">
                <input type="hidden" value="https://source.unsplash.com/300x300?house" name="photo_3">
                <input type="hidden" value="https://source.unsplash.com/300x300?house" name="photo_4">
                <input type="hidden" value="https://source.unsplash.com/300x300?house" name="photo_5">
                <div class="photo-frame">Foto 1</div>
                <div class="photo-frame">Foto 2</div>
                <div class="photo-frame">Foto 3</div>
                <div class="photo-frame">Foto 4</div>
                <div class="photo-frame">Foto 5</div>
            </div>
        </div>

        <div class="add-rentplace border border-3 rounded p-3 mt-4">
            <p class="add-rentplace-label fw-bold">Informasi Kos / Kontrakan</p>
            <div class="form-group row mb-2">
                <label for="title" class="col-sm-2 col-form-label add-rentplace-label">Judul Pos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Judul Pos" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="price" class="col-sm-2 col-form-label add-rentplace-label">Harga Sewa</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Harga Sewa" value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- <div class="col-sm-auto">
                    <div class="form-check form-check-inline">
                        <label for="intervalBayar"> / </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rent_time" id="inlineRadio1" value="Bulan">
                        <label class="form-check-label"  for="inlineRadio1">Bulan</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rent_time" id="inlineRadio2" value="Tahun">
                        <label class="form-check-label" for="inlineRadio2">Tahun</label>
                    </div>
                </div> --}}

                <div class="col-sm-1">
                    <p class="add-rentplace-label">Disewakan Untuk</p>
                </div>

                {{-- <div class="col-sm-auto">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rent_for" id="inlineRadio1" value="Putra" @if (old('rent_for') == "Putra")
                            checked
                        @endif>
                        <label class="form-check-label" for="inlineRadio1">Putra</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rent_for" id="inlineRadio2" value="Putri" @if (old('rent_for') == "Putri")
                            checked
                        @endif>>
                        <label class="form-check-label" for="inlineRadio2">Putri</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rent_for" id="inlineRadio2" value="Campur" @if (old('rent_for') == "Campur")
                            checked
                        @endif>>
                        <label class="form-check-label" for="inlineRadio2">Campur</label>
                    </div>
                </div> --}}
            </div>

            {{-- ga perlu kayanya --}}
            {{-- <div class="form-group row mb-2">
                <label for="inputFasilitas" class="col-sm-2 col-form-label add-rentplace-label">Fasilitas</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="inputFasilitas" placeholder="Fasilitas yang Disediakan"></textarea>
                </div>
            </div> --}}

            <div class="form-group row mb-2">
                <label for="inputDeskripsi" class="col-sm-2 col-form-label add-rentplace-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control @error('description') is-invalid @enderror" id="inputFasilitas" name="description" placeholder="Deskripsi dari Kos / Kontrakan">{{ old('description') }}</textarea>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- <div class="form-group row mb-2">
                <label for="" class="col-sm-2 col-form-label add-rentplace-label"></label>
                <div class="col-sm-2">
                    <label for="inputJumlahKamar">Jumlah Kamar</label>
                    <input type="number" class="form-control @error('total_room') is-invalid @enderror" id="inputJumlahKamar" name="total_room" placeholder="Jumlah Kamar" value="{{ old('total_room') }}">
                    @error('total_room')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-sm-2">
                    <label for="inputSisaKamar">Sisa Kamar</label>
                    <input type="number" class="form-control @error('available_room') is-invalid @enderror" id="inputSisaKamar" name="available_room" placeholder="Sisa Kamar" value="{{ old('available_room') }}">
                    @error('available_room')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-sm-2"></div> --}}

                {{-- <div class="col-sm-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <label for="inputPanjangKamar">Panjang Kamar</label>
                            <input type="number" class="form-control @error('room_length') is-invalid @enderror" name="room_length" id="inputPanjangKamar" placeholder="Panjang Kamar" value="{{ old('room_length') }}">
                        @error('room_length')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <div class="space px-2">
                            <label for=""></label>
                            <p>X</p>
                        </div>

                        <div>
                            <label for="inputLebarKamar">Lebar Kamar</label>
                            <input type="number" class="form-control @error('room_width') is-invalid @enderror" name="room_width" id="inputLebarKamar" placeholder="Lebar Kamar" value="{{ old('room_width') }}">
                            @error('room_length')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="add-rentplace border border-3 rounded p-3 mt-4">
            <p class="add-rentplace-label fw-bold">Alamat Kos / Kontrakan</p>
                <div class="form-group row mb-2">
                    <label for="inputAlamat" class="col-sm-2 col-form-label add-rentplace-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea rows="4" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Alamat dari Kos / Kontrakan">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                {{-- <div class="form-group row mb-2">
                    <label for="" class="col-sm-2 col-form-label add-rentplace-label"></label>
                    <div class="col-sm">
                        <label class="add-rentplace-label" for="provinsi">Provinsi</label>
                        <select class="form-select" name="province" id="provinsi">
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-sm">
                        <label class="add-rentplace-label" for="kabupaten">Kabupaten/Kota</label>
                        <select class="form-select" name="city" id="kabupaten">
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-sm">
                        <label class="add-rentplace-label" for="kecamatan">Kecamatan</label>
                        <select class="form-select" name="district" id="kencamatan">
                            <option value=""></option>
                        </select>
                    </div>
                </div> --}}

                <div class="form-group row mb-2">
                    <label for="inputLink" class="col-sm-2 col-form-label add-rentplace-label">Link Maps</label>
                    <div class="col-sm-10">
                        <input type="url" class="form-control" id="inputLink" name="link_location" placeholder="URL Lokasi Kos / Kontrakan" value="{{ old('link_location') }}">
                    </div>
                </div>
        </div>

        <div class="add-rentplace-buttons d-flex justify-content-end mt-4">
            <button class="btn btn-wide btn-danger cancel me-3" type="cancel">Batal</button>
            <button class="btn btn-wide btn-success save" type="submit">Simpan</button>
        </div>
    </div>
</form>

    <!-- footer section  -->
    @include('partials.footer2')
@endsection
