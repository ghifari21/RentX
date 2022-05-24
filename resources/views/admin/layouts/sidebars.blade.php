<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">RentX - Administrator</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/admin" class="nav-link text-white">Home</a>
        </li>
        <li>
            <a href="/admin/transaksi" class="nav-link text-white">Transaksi</a>
        </li>
        <li>
            <a href="/admin/daftarAdmin" class="nav-link text-white">Daftar Admin</a>
        </li>
        <li>
            <a href="/admin/daftarSeller" class="nav-link text-white">Daftar Seller</a>
        </li>
        <li>
            <a href="/admin/daftarBuyer" class="nav-link text-white">Daftar Buyer</a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <strong>{{ $adminName }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <form action="/logout" method="post">
                @csrf
                <a class="dropdown-item" href="/logout">Sign out</a>
            </form>
        </li>
        </ul>
    </div>
</div>
