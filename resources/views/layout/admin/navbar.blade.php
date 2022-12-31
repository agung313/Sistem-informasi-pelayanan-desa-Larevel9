<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #006029">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard"> <span style="margin-right: 5px"><img src="{{ asset('storage/'. $profil->logoDesa) }}" height="30px" alt=""></span> <b>My Dashboard</b></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="w-100"  style="vertical-align: middle">
        <h6 style="text-align: center; vertical-align: middle; color: white; text-transform: uppercase">{{ $other->fullTitle }} {{ $profil->namaDesa }}</h6>
    </div>
    
</header>