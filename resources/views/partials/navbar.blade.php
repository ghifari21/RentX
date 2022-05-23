<navbar class="navbar py-3 px-5 mb-5" style="background-color: #2055CB;">
    <a href="#" style="text-decoration: none;"><img src="" alt="RentX" class="ms-4"></a>
    <div class="nav-button me-4">
        <i class="fa fa-bell me-2 fs-4"></i>
        <i class="fa fa-envelope me-5 fs-4"></i>
        <form action="/logout" method="post">
            @csrf
            <button type="submit"><i class="fa fa-user fs-3"></i> Logoout</button>
        </form>
    </div>
</navbar>
