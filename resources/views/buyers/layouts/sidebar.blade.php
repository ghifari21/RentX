<div class="col-3 p-3">
    <!-- identity section -->
    <div class="row mb-3">
        <div class="col">
            <img src="{{ asset('/storage/' . $buyer->photo_profile) }}" class="rounded img-fluid" alt="Avatar">
        </div>
        <div class="col">
            <div class="row mt-1">
                <p class="fw-bold mb-0">{{ auth()->user()->name }}</p>
                <p class="">{{ auth()->user()->email }}</p>
            </div>
            <div class="row-1">
                <a href="/dashboard/{{ auth()->user()->username }}/edit"><button class="btn btn-outline-primary">Edit Profile</button></a>
            </div>
        </div>
    </div>
    <!-- option section -->
    <div class="row mb-3 border-bottom border-secondary">
        <div class="col-1">
            <i class="fa-solid fa-house"></i>
        </div>
        <div class="col">
            <a href="/dashboard" class="text-black" style="text-decoration: none;"><p>Kos Saya</p></a>
        </div>
    </div>
    <div class="row mb-3 border-bottom border-secondary">
        <div class="col-1">
            <i class="fa-solid fa-clock-rotate-left"></i>
        </div>
        <div class="col">
            <a href="/dashboard/history" class="text-black" style="text-decoration: none;"><p>Riwayat Kos</p></a>
        </div>
    </div>
    <div class="row mb-3 border-bottom border-secondary">
        <div class="col-1">
            <i class="fa-solid fa-pen-to-square"></i>
        </div>
        <div class="col">
            <a href="/dashboard/change-password" class="text-black" style="text-decoration: none;"><p>Change Password</p></a>
        </div>
    </div>
</div>
