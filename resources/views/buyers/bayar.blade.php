@extends('buyers.layouts.main')

@section('main-content')
    <div class="row mb-5 gap-3">
        <!-- left side  -->
        <div class="col border border-secondary rounded p-3" style="background-color: #E7F9FD;">
            <p class="fw-bold">No Virtual Account : <span class="fw-normal">123456789</span></p>
            <hr>
            <div class="row">
                <div>
                    <img class="rounded" src="" alt="">
                </div>
            </div>
            <div class="row">
                <p class="fw-bold fs-4">{{ $order->property->title }}</p>
                <p>Putra</p>
                <p>Per Bulan : Rp.800.000</p>
            </div>
            <div class="row">
                <div class="col">
                    <hr>
                    <p>Mulai Sewa : </p>
                    <h6>26 May 2022</h6>
                    <hr>
                </div>
                <div class="col">
                    <hr>
                    <p>Durasi Sewa : </p>
                    <h6>12 Bulan</h6>
                    <hr>
                </div>
                <div class="col">
                    <hr>
                    <p>Durasi Sewa : </p>
                    <h6>12 Bulan</h6>
                    <hr>
                </div>
            </div>
            <div class="row">
                <h5>Metode Pembayaran :</h5>
                <div class="col">
                    <img class="rounded" src="" alt="">
                </div>
                <div class="col">
                    <img class="rounded" src="" alt="">
                </div>
                <div class="col">
                    <img class="rounded" src="" alt="">
                </div>
                <div class="col">
                    <img class="rounded" src="" alt="">
                </div>
                <div class="col">
                    <img class="rounded" src="" alt="">
                </div>
                <div class="col">
                    <img class="rounded" src="" alt="">
                </div>
                <div class="col">
                    <img class="rounded" src="" alt="">
                </div>
            </div>
        </div>
        <!-- right side -->
        <div class="col-4 border border-secondary rounded p-3" style="background-color: #E7F9FD; height: 30%;">
            <div class="row">
                <div class="col">
                    <p class="fw-bold fs-5">Total Pembayaran :</p>
                </div>
                <div class="col">
                    <p class="fs-5">Rp. {{ $order->total_payment }}</p>
                </div>
            </div>
            <form action="/payment/{{ $order->id }}" method="POST">
                @method('put')
                @csrf
                <input type="hidden" name="status" value="paid">
                <button class="btn btn-success" type="submit" style="width: 100%;">Bayar</button>
            </form>
            {{-- <a class="btn btn-success" style="width: 40%;" href="/">Bayar</a> --}}
            {{-- <button class="btn btn-success" style="width: 40%;">Bayar</button> --}}
        </div>
    </div>
@endsection
