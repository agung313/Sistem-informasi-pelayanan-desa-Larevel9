<style>
    ul>li>a:hover{
        color: blue !important;
    }
</style>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-uppercase">
                    <span>Main System</span>
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span class="align-text-bottom bi bi-speedometer2"></span>
                Dashboard
                </a>
            </li>

            @can('admin')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profilDesa*') ? 'active' : '' }}" href="/profilDesa">
                    <span class="align-text-bottom bi bi-alexa"></span>
                    Profil Desa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('apbdes*') ? 'active' : '' }}" href="/apbdesa">
                    <span class="align-text-bottom bi bi-bank"></span>
                    APBDES Desa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('perdesa*') ? 'active' : '' }}" href="/perdesa">
                    <span class="align-text-bottom bi bi-file-earmark-text"></span>
                    PERDES Desa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kegiatan*') ? 'active' : '' }}" href="/kegiatan">
                    <span class="align-text-bottom bi bi-activity"></span>
                    Kegiatan Desa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('musyawarah*') ? 'active' : '' }}" href="/musyawarah">
                    <span class="align-text-bottom bi bi-grid-1x2"></span>
                    Musyawarah Desa
                    </a>
                </li>
                <li class="nav-item">
                    @if (Request::is('lembaga*') || Request::is('jabatan*') || Request::is('anggota*') || Request::is('lembaga/kegiatan*'))
                        <a class="nav-link active" href="/lembaga">
                        <span class="align-text-bottom bi bi-diagram-3"></span>
                        Kelembagaan Desa
                        <a class="nav-link" style="display: none">
                            <span class="align-text-bottom bi bi-diagram-3"></span>
                            Kelembagaan Desa
                        </a>
                    @else
                    <a class="nav-link" href="/lembaga">
                        <span class="align-text-bottom bi bi-diagram-3"></span>
                        Kelembagaan Desa
                    </a>
                    @endif
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-btn" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="align-text-bottom bi bi-diagram-3 "></span>
                    Kelembagaan Desa
                    </a>
                    <ul class="nav dropdown-container" style="display: none; list-style-type: none;">
                        @foreach ($lembaga as $item)
                            <li class="nav-item"><a class="nav-link text-uppercase" href="/lembaga/{{ $item->slugLembaga }}"><span style="margin-right: 5px"><img src="/images/logo/{{ $item->logoLembaga }}" alt="" width="15px" height="15px"></span>{{ $item->singkatanLembaga }}</a></li>
                        @endforeach
                    </ul>
                    <script>
                        var dropdown = document.getElementsByClassName("dropdown-btn");
                        var i;

                        for (i = 0; i < dropdown.length; i++) {
                            dropdown[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                var dropdownContent = this.nextElementSibling;
                                if (dropdownContent.style.display === "block") {
                                dropdownContent.style.display = "none";
                                } else {
                                dropdownContent.style.display = "block";
                                }
                            });
                        }
                    </script>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span class="align-text-bottom bi bi-envelope-paper"></span>
                    Pengajuan Surat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pengaduan*') ? 'active' : '' }}" href="/pengaduan">
                    <span class="align-text-bottom bi bi-exclamation-circle"></span>
                    Pengaduan
                    </a>
                </li>
            @endcan

            @can('lembaga')
                <li class="nav-item">
                    @if (Request::is('lembaga*') || Request::is('jabatan*') || Request::is('anggota*') || Request::is('lembaga/kegiatan*'))
                        <a class="nav-link active" href="/lembaga/{{ $user->lembaga_id }}">
                        <span class="align-text-bottom bi bi-diagram-3"></span>
                        Kelembagaan 
                        <a class="nav-link" style="display: none">
                            <span class="align-text-bottom bi bi-diagram-3"></span>
                            Kelembagaan 
                        </a>
                    @else
                    <a class="nav-link" href="/lembaga/{{ $user->lembaga_id }}">
                        <span class="align-text-bottom bi bi-diagram-3"></span>
                        Kelembagaan 
                    </a>
                    @endif
                </li>
            @endcan
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-uppercase">
            <span style="text-align: center">Administrator</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('myAcount*') ? 'active' : '' }}" href="/myAcount">
                <span class="align-text-bottom bi bi-person-badge"></span>
                My Account
                </a>
            </li>
            @can('admin')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('user*') ? 'active' : '' }}" href="/user">
                    <span class="align-text-bottom bi bi-person-plus"></span>
                    Other Accounts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('masyarakat*') || Request::is('detailDataMasyarakat') ? 'active' : '' }}" href="/masyarakat">
                    <span class="align-text-bottom bi bi-people"></span>
                    Data masyarakat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('other*') ? 'active' : '' }}" href="/other">
                    <span class="align-text-bottom bi bi-broadcast"></span>
                    Other in System
                    </a>
                </li>
            @endcan

            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link" style="border: 0"><span class="bi bi-box-arrow-right" style="margin-right: 8px"></span>Log Out</button>
                </form>
            </li>
        </ul>
    </div>
</nav>