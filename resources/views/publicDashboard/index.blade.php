@extends('../layout/mainPublic')

@section('publicContent')
    <style>
        @media (min-width: 320px) and (max-width: 480px) 
        {

            #normal{
                display: none !important;
            }

            #mobile{
                display: block !important;
            }

        }
    </style>
    

    <div id="mobile" style="display: none">
        <div id="carouselExampleIndicatorsMobile" class="carousel slide" data-bs-ride="carousel">
            
                <div class="carousel-inner card-img" style="background-color: black">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/' . $other->fotoPertama) }}" class="d-block w-100" alt="..." height="300px" style="opacity: 0.6;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/' . $other->fotoKedua) }}" class="d-block w-100" alt="..." height="300px" style="opacity: 0.6;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/' . $other->fotoKetiga) }}" class="d-block w-100" alt="..." height="300px" style="opacity: 0.6;">
                    </div>
                </div>
    
                <div class="card-img-overlay trapBlack" style="height: 300px; width: 100%;">
                    <img src="images/trapBlackMobile.png" alt="" class="card-img" height="100%" width="500px" style="opacity: 0.5">
                    <div class="card-img-overlay" style="padding: 10px; margin-top: 40px">
                        <div class="d-inline-flex text-center" style="margin-bottom: 25px; margin-left: 85px">
                            <img style="margin-right: 20px" src="images/logo/INDONESIA_logo.png" alt="" height="40px">
                            <img style="margin-right: 20px" src="images/logo/Kemendes.png" alt="" height="40px">
                            <img style="margin-right: 35px" src="images/logo/riau.png" alt="" height="40px">
                            <img src="images/logo/logo_kabupaten_rokan_hulu.png" alt="" height="40px">
                        </div>
                        <h5 style="font-size: 15px; color: white; font-family: 'Oregano', cursive; text-align: center" class="mx-3 mt-2">Selamat Datang di {{ $other->fullTitle }}</h5>
    
                        <h1 style="color: white; font-family: 'Raleway', sans-serif; text-transform: capitalize; font-size: 32px; text-align: center" class="mx-3 mt-3"><b>{{ $profil->namaDesa }}</b></h1>
    
                        <h6 style="color: white; font-size: 12px; text-transform: capitalize; text-align: center" class="fst-italic fw-lighter mx-3" ><b>Kecamatan {{ $profil->kecamatan }}, Kabupaten {{ $profil->kabupaten }}, Provinsi {{ $profil->provinsi }}</b></h6>
    
                        <div class="carousel-indicators" >
                            <button type="button" data-bs-target="#carouselExampleIndicatorsMobile" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicatorsMobile" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicatorsMobile" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
    
                    </div>
                </div>
            
            
            
        </div>
    </div>
    <div id="normal">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner card-img" style="background-color: black">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/' . $other->fotoPertama) }}" class="d-block w-100" alt="..." height="450px" style="opacity: 0.6;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/' . $other->fotoKedua) }}" class="d-block w-100" alt="..." height="450px" style="opacity: 0.6;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/' . $other->fotoKetiga) }}" class="d-block w-100" alt="..." height="450px" style="opacity: 0.6;">
                </div>
            </div>
    
            <div class="card-img-overlay trapBlack" style="height: 450px; width: 50%;">
                <img src="images/trapBlack.png" alt="" class="card-img" height="100%" width="100%" style="opacity: 0.8">
                <div class="card-img-overlay" style="padding: 20px; margin-top: 4%">
                    <div class="d-inline-flex text-center" style="margin-left: 10px; margin-bottom: 25px">
                        <img style="margin-right: 60px" src="images/logo/INDONESIA_logo.png" alt="" height="75px">
                        <img style="margin-right: 60px" src="images/logo/Kemendes.png" alt="" height="75px">
                        <img style="margin-right: 85px" src="images/logo/riau.png" alt="" height="75px">
                        <img src="images/logo/logo_kabupaten_rokan_hulu.png" alt="" height="75px">
                    </div>
                    <h2 style="color: white; font-family: 'Oregano', cursive;" class="mx-3 mt-2">Selamat Datang di {{ $other->fullTitle }}</h2>
                    <h1 style="color: white; font-family: 'Raleway', sans-serif; font-size: 60px; text-transform: capitalize" class="mx-3 mt-3"><b>{{ $profil->namaDesa }}</b></h1>
                    <h5 style="color: white; margin-bottom: 32px;  text-transform: capitalize" class="fst-italic fw-lighter mx-3" >Kecamatan {{ $profil->kecamatan }}, Kabupaten {{ $profil->kabupaten }}, Provinsi {{ $profil->provinsi }}</h5>
                    <a href="#menu" style="text-align: center; margin-left: 180px"><button class="btn btn-success" style="width: 130px">Mulai</button></a>
                    <div class="carousel-indicators" style="margin-right: 250px; margin-bottom: 30px">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div id="menu" class="carousel">

        <div id="mobile" style="display: none">
            <div class="card-img">
                <img src="../images/lineBg.png" alt="" height="100px" width="100%">
            </div>
    
            <div class="card-img-overlay d-inline-flex">
                <div style="width: 12%">
                    <input type="hidden">
                </div>
                <div class="d-inline-flex py-3" style="justify-content: center;">
                    
                    <div style="height: 70px; color: white; text-align: center; border: 0; border-right: 2px; border-style: solid; padding-left: 10px; padding-right: 10px;">
                        <h1 style="font-weight: bold; font-size: 30px">{{ $profil->luasDesa }}</h1>
                        <p style="font-size: 15px;">Km<sup>2</sup></p>
                    </div>
    
                    <div style="height: 70px; color: white; text-align: center; border: 0; border-right: 2px; border-style: solid; padding-left: 10px; padding-right: 10px">
                        <h1 style="font-weight: bold; font-size: 30px">{{ $profil->jumlahDusun }}</h1>
                        <p style="font-size: 15px">Dusun</p>
                    </div>
    
                    <div style="height: 70px; color: white; text-align: center; border: 0; border-right: 2px; border-style: solid; padding-left: 10px; padding-right: 10px">
                        <h1 style="font-weight: bold; font-size: 30px">{{ $profil->jumlahKeluarga }}</h1>
                        <p style="font-size: 15px">Keluarga</p>
                    </div>
    
                    <div style="height: 70px; color: white; text-align: center; padding-left: 10px; padding-right: 10px">
                        <h1 style="font-weight: bold; font-size: 30px;">{{ $profil->jumlahJiwa }}</h1>
                        <p style="font-size: 15px">Jiwa</p>
                    </div>
    
                </div>
                
            </div>
        </div>

        <div id="normal">
            <div class="card-img">
                <img src="../images/lineBg.png" alt="" height="150px" width="100%">
            </div>
    
            <div class="card-img-overlay d-inline-flex">
                <div style="width: 10%">
                    <input type="hidden">
                </div>
                <div class="d-inline-flex py-3" style="width: 80%; justify-content: center;">
    
                    <div style="width: 20%; height: 80px; color: white; text-align: center; border: 0; border-right: 2px; border-style: solid">
                        <h1 style="font-weight: bold; font-size: 50px">{{ $profil->luasDesa }}</h1>
                        <p style="font-size: 20px">Km<sup>2</sup></p>
                    </div>
    
                    <div style="width: 20%; height: 80px; color: white; text-align: center; border: 0; border-right: 2px; border-style: solid">
                        <h1 style="font-weight: bold; font-size: 50px">{{ $profil->jumlahDusun }}</h1>
                        <p style="font-size: 20px">Dusun</p>
                    </div>
    
                    <div style="width: 20%; height: 80px; color: white; text-align: center; border: 0; border-right: 2px; border-style: solid">
                        <h1 style="font-weight: bold; font-size: 50px">{{ $profil->jumlahKeluarga }}</h1>
                        <p style="font-size: 20px">Keluarga</p>
                    </div>
    
                    <div style="width: 20%; height: 80px; color: white; text-align: center">
                        <h1 style="font-weight: bold; font-size: 50px">{{ $profil->jumlahJiwa }}</h1>
                        <p style="font-size: 20px">Jiwa</p>
                    </div>
    
                </div>
                <div style="width: 10%">
                    <input type="hidden">
                </div>
            </div>
        </div>
        
    </div>

    <div  class="px-4 py-4" >
        {{-- <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Bersama Membangun Desa</h3>
        <p class="text-center mx-auto mt-3" style="width: 85%; font-size: 20px">
            Sistem Informasi dan Pelayanan {{ $profil->namaDesa }}, merupakan sistem yang dibangun guna memberikan berbagai informasi mengenai {{ $profil->namaDesa }}, sekaligus memberikan pelayanan kepada masyarakat {{ $profil->namaDesa }}. 
        </p> --}}
        <div id="mobile" style="display: none">
            <div style="text-align: center;" class="py-4">
                <img src="{{ asset('storage/'. $profil->logoDesa) }}" alt="" height="100px">
                <h4 style="font-family: 'Raleway', sans-serif; margin-top: 15px; margin-bottom: 20px">{{ $profil->namaDesa }}</h4>
                <h6 style="font-family: 'Raleway', sans-serif;">Kepala Desa : {{ $profil->kepalaDesa }}</h6>
                <div class="card" style="margin-top: 30px; padding: 10px">
                    <div style="margin-bottom: 20px">
                        <h6 style="font-family: 'Raleway', sans-serif; background-color: #1746a2; width: 100px;; text-align: center; border-radius: 15px; vertical-align: middle;"><p class="py-1" style="font-size: 14px; color: whitesmoke">Visi</p></h6>
                        <p style="text-align: justify; font-size: 13px">{!! $lembaga->visi !!}</p>
                    </div>
                    <div>
                        <h6 style="font-family: 'Raleway', sans-serif; background-color: #1746a2; width: 100px;; text-align: center; border-radius: 15px; vertical-align: middle;"><p class="py-1" style="font-size: 14px; color: whitesmoke">Misi</p></h6>
                        <div class="d-block" style="margin-top: 20px; text-align: left; font-size: 13px">
                            <p>{!! $lembaga->misi !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 20px">
                
                <h6 class="text-center" style="font-family: 'Raleway', sans-serif;">Silakan Pilih Menu yang Anda Inginkan</h6>
                <p style="text-align: justify; font-size: 13px">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
                
                <div style="margin-top: 20px">
                    <div style="float: left">
                        <button style=" margin-top: -10px; border: 0" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHelp" aria-controls="offcanvasDarkNavbar">
                            <h1><span style="color: black; " class="bi bi-question-circle-fill"></span></h1>
                        </button>
                        
                    </div>
                    <div class="w-100" style="text-align: center">
                        <a class="dropdown-btn dropdown-toggle" style="text-decoration: none; margin-right: 30px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h1 class="bi bi-info-square-fill" style="font-size: 100px; color: #47B5FF;"></h1>
                            <h3 style="color: black; font-family: 'Raleway', sans-serif; ">INFORMASI</h3>
                        </a>
                        <ul class="dropdown-container" style="display: none; list-style-type: none; margin-right: 30px; padding: 0; margin: 0%;">
                            <li class="d-inline-flex" style="margin-top: 15px; margin-left: 5px; margin-right: 5px">
                                <a href="informasiPublic/profil" style="text-decoration: none; width: 100px;  margin-right: 10px ">
                                    {{-- <h1 class="bi bi-info-square-fill" style="font-size: 50px; color: #47B5FF;"></h1> --}}
                                    <img src="images/profilDesa.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                    <h6 style="margin-top: 7px; color: black; font-family: 'Raleway', sans-serif; font-size: 13px">PROFIL DESA</h6>
                                </a>
                                <a href="informasiPublic/apbdes" style="text-decoration: none; width: 100px; margin-left: 10px; margin-right: 10px">
                                    <img src="images/apbdes.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                    <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 13px">APBDES Desa</h6>
                                </a>
                                <a href="informasiPublic/perdes" style="text-decoration: none; width: 100px; margin-left: 10px;">
                                    <img src="images/file.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                    <h6 style="margin-top: 5px; color: black; font-family: 'Raleway', sans-serif; font-size: 13px">PERDES Desa</h6>
                                </a>
                            </li>

                            <li class="d-inline-flex" style="margin-top: 15px; margin-left: 5px; margin-right: 5px">
                                <a href="informasiPublic/kegiatan" style="text-decoration: none; width: 100px;  margin-right: 10px">
                                    <img src="images/handCalendar.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                    <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 13px">Kegiatan Desa</h6>
                                </a>
                                <a href="informasiPublic/musyawarah" style="text-decoration: none; width: 100px; margin-left: 10px; margin-right: 10px">
                                    <img src="images/meeting2.png" class="card-img-top" alt="..." style="margin-top: 15px; height: 65px;">
                                    <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 13px">Musyawarah Desa</h6>
                                </a>
                                <a href="informasiPublic/kelembagaan" style="text-decoration: none; width: 100px; margin-left: 10px;">
                                    <img src="images/organization.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                    <h6 style="margin-top: 6px; color: black; font-family: 'Raleway', sans-serif; font-size: 13px">Kelembagaan Desa</h6>
                                </a>
                            </li>

                           {{-- <li style="margin-top: 15px">
                            <a href="informasiPublic/profil" style="text-decoration: none; ">
                                <img src="images/profilDesa.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">PROFIL DESA</h6>
                            </a>
                           </li>
                           <li style="margin-top: 25px">
                            <a href="informasiPublic/apbdes" style="text-decoration: none; ">
                                <img src="images/apbdes.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">APBDES Desa</h6>
                            </a>
                           </li>
                           <li style="margin-top: 25px">
                            <a href="informasiPublic/perdes" style="text-decoration: none; ">
                                <img src="images/file.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">PERDES Desa</h6>
                            </a>
                           </li>
                           <li style="margin-top: 25px">
                            <a href="informasiPublic/kegiatan" style="text-decoration: none; ">
                                <img src="images/handCalendar.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">Kegiatan Desa</h6>
                            </a>
                           </li>
                           <li style="margin-top: 25px">
                            <a href="informasiPublic/musyawarah" style="text-decoration: none; ">
                                <img src="images/meeting2.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">Musyawarah Desa</h6>
                            </a>
                           </li>
                           <li style="margin-top: 25px">
                            <a href="informasiPublic/kelembagaan" style="text-decoration: none; ">
                                <img src="images/organization.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">Kelembagaan Desa</h6>
                            </a>
                           </li> --}}
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
                    </div>

                    <div class="w-100 mt-5" style="text-align: center">
        
                        <a class="dropdown-pelayanan dropdown-toggle" style="text-decoration: none; " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h1 class="bi bi-x-diamond-fill" style="font-size: 100px; color: #FFB200"></h1>
                            <h3 style="color: black; font-family: 'Raleway', sans-serif;">PELAYANAN</h3>
                        </a>

                        <ul class="dropdown-container" style="display: none; list-style-type: none; margin-right: 30px; padding: 0; margin: 0%;">
                            <li class="d-inline-flex" style="margin-top: 15px; margin-left: 5px; margin-right: 5px">
                                <a href="informasiPublic/surat" style="text-decoration: none; width: 100px; margin-left: 10px;">
                                    <img src="images/mail.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 55px">
                                    <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 13px">Pengajuan Surat</h6>
                                </a>
                                <a href="/pelayananPublic/pengaduan" style="text-decoration: none; width: 100px; margin-right: 12px; margin-top: 10px">
                                    <h1 class="bi bi-exclamation-circle" style="font-size: 50px; color: #FFB200;"></h1>
                                    <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 13px">Pengaduan</h6>
                                </a>
                            </li>
                            {{-- <li style="margin-top: 15px">
                                <a href="informasiPublic/surat" style="text-decoration: none; ">
                                    <img src="images/mail.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 65px">
                                    <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">Pengajuan Surat</h6>
                                </a>
                            </li>
                            <li style="margin-top: 25px">
                                <a href="informasiPublic/pengaduan" style="text-decoration: none; ">
                                    <h1 class="bi bi-exclamation-circle" style="font-size: 50px; color: #FFB200;"></h1>
                                    <h6 style="color: black; font-family: 'Raleway', sans-serif; font-size: 15px">Pengaduan</h6>
                                </a>
                            </li> --}}
                        </ul>
                        <script>
                            var dropdown = document.getElementsByClassName("dropdown-pelayanan");
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
                    </div>

                </div>

                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasHelp" aria-labelledby="offcanvasHelpLabel">
                    <div class="offcanvas-header" style="border: 0; border-bottom: 1px solid white">
                        <div class="d-inline-flex">
                            <img src="{{ asset('storage/'. $profil->logoDesa) }}" alt="Logo" width="40" height="45" class="d-inline-block align-text-top">
                            <div class="d-inline-block">
        
                                <h5 style="margin-left: 10px; font-family: 'Raleway', sans-serif; color: white; text-transform: uppercase"><b>{{ $other->shortTitle }} {{ $profil->namaDesa }}</b></h5>
                                <p style="margin-left: 10px; font-size: 10px; margin-top: -8px; color: whitesmoke; ">{{ $other->fullTitle }} {{ $profil->namaDesa }}</p>
                            </div>
                        </div>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" style="color: white; text-align: justify">
                        <h5><b>HELP INFORMATION</b></h5><br>
                        <p>Sistem Informasi dan Pelayanan {{ $profil->namaDesa }}, merupakan sistem yang dibangun guna memberikan berbagai informasi mengenai {{ $profil->namaDesa }}, sekaligus memberikan pelayanan kepada masyarakat {{ $profil->namaDesa }}. </p>
                        <p>Klik pada menu yang tersedia untuk menampilkan informasi yang ada pada setiap menu.</p>
                        <p><strong>Menu Informasi</strong> berisikan berbagai informasi mengenai {{ $profil->namaDesa }}, mulai dari profil desa, kelembagaan desa, kebijakan desa, dan lain sebagainya.</p>
                        <p><strong>Menu Pelayanan</strong> berisikan layanan yang dapat diakses masyarakat {{ $profil->namaDesa }}, layanan yang dapat diakses adalah pengajuan pembuatan surat dan pengaduan terhadap berbagai tindakan berbahaya maupun peristiwa yang terjadi seputar {{ $profil->namaDesa }}.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="normal">
            <div  style="float: left ">
                <!-- Button trigger modal -->
                <h1 type="button" class="helpInformation bi bi-question-circle-fill btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="position: sticky; font-size: 40px;"></h1>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            {{-- <h1 >Help Information</h1> --}}
                            <div class="modal-title fs-5 d-inline-flex" id="exampleModalLabel">
                                <p><img src="{{ asset('storage/'. $profil->logoDesa) }}" alt="" height="30px"></p>
                                <p style="font-size: 15px; margin-left: 5px; margin-top: 7px"><b>{{ $other->fullTitle }} {{ $profil->namaDesa }}</b></p>
                            </div>
                                
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="text-align: justify">
                                <p>Sistem Informasi dan Pelayanan {{ $profil->namaDesa }}, merupakan sistem yang dibangun guna memberikan berbagai informasi mengenai {{ $profil->namaDesa }}, sekaligus memberikan pelayanan kepada masyarakat {{ $profil->namaDesa }}. </p>
                                <p>Klik pada menu yang tersedia untuk menampilkan informasi yang ada pada setiap menu.</p>
                                <p><strong>Menu Visi dan Misi</strong> berisikan mengenai visi dan misi pemerintahan {{ $profil->namaDesa }} yang sedang berlangsung.</p>
                                <p><strong>Menu Demografi</strong> berisikan mengenai lokasi {{ $profil->namaDesa }} dengan bantuan google maps.</p>
                                <p><strong>Menu Informasi</strong> berisikan berbagai informasi mengenai {{ $profil->namaDesa }}, mulai dari profil desa, kelembagaan desa, kebijakan desa, dan lain sebagainya.</p>
                                <p><strong>Menu Pelayanan</strong> berisikan layanan yang dapat diakses masyarakat {{ $profil->namaDesa }}, layanan yang dapat diakses adalah pengajuan pembuatan surat dan pengaduan terhadap berbagai tindakan berbahaya maupun peristiwa yang terjadi seputar {{ $profil->namaDesa }}.</p>
                                
                            </div>
                            <div class="modal-footer">
                                <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="px-3 " style="text-align: center">
                <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Silakan Pilih Menu yang Anda Inginkan</h3>
                <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
                <div class="row d-inline-flex" style="text-align: center; padding: 10px; margin-bottom: 20px">
    
                    
                    {{-- <div class="card btnMenu" style="width: 13rem; margin-right: 15px;">
                        <a href="/informasiPublic" style="text-decoration: none; color: black">
                            <img src="images/information1.png" class="card-img-top" alt="..." style="width: 200px; margin-top: 10px">
                            <div class="card-body">
                                <h3 class="card-text" style="font-family: 'Raleway', sans-serif;">Informasi</h3>
                            </div>
                        </a>
                    </div>
    
                    <div class="card btnMenu" style="width: 13rem; margin-left: 15px;">
                        <a href="/pelayananPublic" style="text-decoration: none; color: black">
                            <img src="images/service.png" class="card-img-top" alt="..." style="width: 195px; margin-top: 10px">
                            <div class="card-body">
                                <h3 class="card-text" style="font-family: 'Raleway', sans-serif;">Pelayanan</h3>
                            </div>
                        </a>
                    </div> --}}
    
                    <div id ="wrapper" style="display: inline-block; align-items: center; min-height: 500px; min-width: 1200px; padding: 5px; ">
                        <div class="tabs" style="width: 100%">
                            
                            
                            <input hidden type="radio" name="tab-name" id="tab1" checked>
                            <label for="tab1" class="Cvisimis mx-2" style="display: inline-block; border-bottom: 2px solid transparent; font-size: 25px; padding: 10px; cursor: pointer; transition: all 0.25s ease; width: 200px; height: 130px; border-radius: 10px">
                                {{-- <img src="../images/information1.png" alt="" width="80px" height="80px"> --}}
                                <h1 class="bi bi-gem" style="font-size: 50px"></h1>
                                <h4>Visi Misi</h4>
                            </label>
                            
                            <input hidden type="radio" name="tab-name" id="tab2" >
                            <label for="tab2" class="Cdemografi mx-2" style="display: inline-block; border-bottom: 2px solid transparent; font-size: 25px; padding: 10px; cursor: pointer; transition: all 0.25s ease; width: 200px; height: 130px; border-radius: 10px">
                                {{-- <img src="../images/information1.png" alt="" width="80px" height="80px"> --}}
                                <h1 class="bi bi-map-fill" style="font-size: 50px"></h1>
                                <h4>Demografi</h4>
                            </label>
                            
                            <input hidden type="radio" name="tab-name" id="tab3" >
                            <label for="tab3" class="Cinformasi mx-2" style="display: inline-block; border-bottom: 2px solid transparent; font-size: 25px; padding: 10px; cursor: pointer; transition: all 0.25s ease; width: 200px; height: 130px; border-radius: 10px">
                                {{-- <img src="../images/information1.png" alt="" width="80px" height="80px"> --}}
                                <h1 class="bi bi-info-square-fill" style="font-size: 50px"></h1>
                                <h4>Informasi</h4>
                            </label>
    
                            <input hidden type="radio" name="tab-name" id="tab4">
                            <label for="tab4" class="Cpelayanan mx-2" style="display: inline-block; border-bottom: 2px solid transparent; font-size: 25px; padding: 10px; cursor: pointer; transition: all 0.25s ease; width: 200px; height: 130px; border-radius: 10px">
                                {{-- <img src="../images/service.png" alt="" width="80px" height="80px"> --}}
                                <h1 class="bi bi-x-diamond-fill" style="font-size: 50px"></h1>
                                <h4>Pelayanan</h4>
                            </label>
    
                            <div class="tbcontent" style=" padding: 15px; margin-top: 20px"  >
                                
                                <div id="visimisi" class="tbpanel" style="display: none; background-color: whitesmoke">
                                    <div class=" d-inline-flex" style="text-align: center; border: 2px solid #1746a2; border-radius: 10px; padding: 8px; text-align: justify; width: 100%; min-height: 300px; padding: 15px">
                                        {{-- <img src="../images/logo/logo_kabupaten_rokan_hulu.png" alt="" height="100px"> --}}
                                        <div style="width: 30%;">
                                            <div style="text-align: center;" class="py-4">
                                                <img src="{{ asset('storage/'. $profil->logoDesa) }}" alt="" height="150px">
                                                <h4 style="font-family: 'Raleway', sans-serif; margin-top: 15px; margin-bottom: 20px">{{ $profil->namaDesa }}</h4>
                                                <h6 style="font-family: 'Raleway', sans-serif;">Kepala Desa : {{ $profil->kepalaDesa }}</h6>
                                            </div>
                                        </div>
                                        <div style="width: 35%; padding: 15px; border-left: 1px solid black">
                                            <h2 style="font-family: 'Raleway', sans-serif; background-color: #1746a2; width: 100px; height: 40px; text-align: center; border-radius: 15px; vertical-align: middle;"><p class="py-1" style="font-size: 25px; color: whitesmoke">Visi</p></h2>
                                            <div style="margin-top: 20px; text-align: justify;  font-family: 'Raleway', sans-serif;" class="px-2">
                                                <p >{!! $lembaga->visi !!}</p>
                                            </div>
                                        </div>
                                        <div style="width: 35%; padding: 15px; border-left: 1px solid black">
                                            <h2 style="font-family: 'Raleway', sans-serif; background-color: #1746a2; width: 100px; height: 40px; text-align: center; border-radius: 15px; vertical-align: middle;"><p class="py-1" style="font-size: 25px; color: whitesmoke">Misi</p></h2>
                                            <div class="d-block" style="margin-top: 20px; text-align: justify;  font-family: 'Raleway', sans-serif;">
                                                <p>{!! $lembaga->misi !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="demografi" class="tbpanel" style="display: none">
                                    <div class="row d-inline-flex" style="text-align: center; ">
                                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1000&amp;height=500&amp;hl=en&amp;q=Balai Desa Tapung Jaya, Ujung Batu Timur, Kabupaten Rokan Hulu, Riau, Indonesia&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:1000px;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:1000px;height:500px;}.gmap_iframe {width:1000px!important;height:500px!important;}</style></div>
                                    </div>
                                </div>
    
                                <div id="informasi" class="tbpanel" style="display: none">
                                    <div class="row d-inline-flex" style="text-align: center;">
    
                
                                        <div class="card btnMenu" style="width: 12rem; margin-right: 15px; height: 230px; border-color: #47B5FF">
                                            <a href="/informasiPublic/profil" style="text-decoration: none; color: #47B5FF">
                                                <img src="images/profilDesa.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 130px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif;">Profil Desa</h6>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="card btnMenu" style="width: 12rem; height: 230px; margin-right: 15px; border-color: #47B5FF">
                                            <a href="/informasiPublic/apbdes" style="text-decoration: none; color: #47B5FF">
                                                <img src="images/apbdes.png" class="card-img-top" alt="..." style="width: 130px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif; margin-top: 2px">APBDES Desa</h6>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="card btnMenu" style="width: 12rem; height: 230px; margin-right: 15px; border-color: #47B5FF">
                                            <a href="/informasiPublic/perdes" style="text-decoration: none; color: #47B5FF; ">
                                                <img src="images/file.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 130px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif;">PERDES Desa</h6>
                                                </div>
                                            </a>
                                        </div>
                                                    
                                        <div class="card btnMenu" style="width: 12rem; height: 230px; margin-right: 15px; border-color: #47B5FF">
                                            <a href="/informasiPublic/kegiatan" style="text-decoration: none; color: #47B5FF">
                                                <img src="images/handCalendar.png" class="card-img-top" alt="..." style="margin-top: 15px; width: 130px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif; margin-top: 13px">Kegiatan Desa</h6>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="card btnMenu" style="width: 12rem; height: 230px; margin-right: 15px; border-color: #47B5FF">
                                            <a href="/informasiPublic/musyawarah" style="text-decoration: none; color: #47B5FF">
                                                <img src="images/meeting2.png" class="card-img-top" alt="..." style="height: 150px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif; margin-top: 10px">Musyawarah Desa</h6>
                                                </div>
                                            </a>
                                        </div>
                            
                                        <div class="card btnMenu" style="width: 12rem; height: 230px; margin-right: 15px; border-color: #47B5FF">
                                            <a href="/informasiPublic/kelembagaan" style="text-decoration: none; color: #47B5FF">
                                                <img src="images/organization.png" class="card-img-top" alt="..." style="margin-top: 20px; width: 140px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif; margin-top: 13px">Kelembagaan Desa</h6>
                                                </div>
                                            </a>
                                        </div>
                            
                                    </div>
                                </div>
                                
                                <div id="pelayanan" class="tbpanel" style="display: none">
                                    <div class="row d-inline-flex" style="text-align: center;">
    
                                        <div class="card btnMenu" style="width: 12rem; margin-right: 15px; height: 230px; border-color: #FFB200">
                                            <a href="/pelayananPublic/surat" style="text-decoration: none; color: #FFB200">
                                                <img src="images/mail.png" class="card-img-top" alt="..." style="margin-top: 10px; width: 130px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif; margin-top: -10px">Pengajuan Surat</h6>
                                                </div>
                                            </a>
                                        </div>
                            
                                        
                                        <div class="card btnMenu" style="width: 12rem; margin-right: 15px; height: 230px; border-color: #FFB200">
                                            <a href="/pelayananPublic/pengaduan" style="text-decoration: none; color: #FFB200">
                                                <img src="images/report.png" class="card-img-top" alt="..." style="margin-top: 5px; width: 150px">
                                                <div class="card-body">
                                                    <h6 class="card-text" style="font-family: 'Raleway', sans-serif;">Pengaduan</h6>
                                                </div>
                                            </a>
                                        </div>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        
    </div>

    <script>
        var a;
        function show_hide_informasi(){
            if(a==1){
                document.getElementById("informasi").style.display="inline";
                return a=0;
            }else{
                document.getElementById("informasi").style.display="none";
                return a=1;
            }  
        }
        function show_hide_pelayanan(){
            if(a==1){
                document.getElementById("pelayanan").style.display="inline";
                return a=0;
            }else{
                document.getElementById("pelayanan").style.display="none";
                return a=1;
            }  
        }
    </script>
@endsection