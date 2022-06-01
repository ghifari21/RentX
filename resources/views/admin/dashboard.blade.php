@extends('admin.layouts.main')

@section('main-content')
    <div class="container p-3">
        <span class="fs-4 fw-bold">Dashboard</span>
        <hr>

        <div class="row p-3 mt-2 gap-4">
            <div class="col border rounded" style="background-color: #F1EE7A;">
                <ul class="nav flex-column mb-auto">
                    <li>
                        <a href="/admin/daftarAdmin" class="nav-link text-black fs-5">
                            <p class="fw-bold">Daftar Admin</p>
                            <hr>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col border rounded" style="background-color: #7AF1D8;">
                <ul class="nav flex-column mb-auto">
                    <li>
                        <a href="/admin/daftarSeller" class="nav-link text-black fs-5">
                            <p class="fw-bold">Daftar Seller</p>
                            <hr>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col border rounded" style="background-color: #7AA3F1;">
                <ul class="nav flex-column mb-auto">
                    <li>
                        <a href="/admin/daftarBuyer" class="nav-link text-black fs-5">
                            <p class="fw-bold">Daftar Buyer</p>
                            <hr>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col border rounded" style="background-color: #ACE98D;">
                <ul class="nav flex-column mb-auto">
                    <li>
                        <a href="/admin/requestUpgrade" class="nav-link text-black fs-5">
                            <p class="fw-bold">Request Jadi Seller</p>
                            <hr>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
