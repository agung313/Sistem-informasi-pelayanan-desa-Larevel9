@extends('../layout/mainPublic')

@section('publicContent')
<div class="container-fluid py-5 px-4">
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
        <div style="float: left">
            <button style=" margin-top: -10px; border: 0" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHelp" aria-controls="offcanvasDarkNavbar">
                <h1><span style="color: black; " class="bi bi-question-circle-fill"></span></h1>
            </button>
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
                <p><strong>Menu Informasi Kelembagaan Desa</strong> berisi berbagai informasi mengenai seluruh kelembagaan yang berada di {{ $profil->namaDesa }}. Tekan salah satu kelembagaan desa untuk melihat informasi lebih detail.</p>
            </div>
        </div>
        
    
        <div class="px-3" style="text-align: center">
            <h6 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai Kelembagaan {{ $profil->namaDesa }}</h6>
            <p style="font-size: 13px; text-align: justify">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <div class="row py-4 justify-content-center">
    
                @foreach ($lembaga as $item)
                    <a class="card mb-4 d-block" href="/informasiPublic/profilKelembagaan/{{ $item->slug }}" style="text-decoration: none; color: black; padding: 10px">

                        <img src="{{ asset('storage/' . $item->logoLembaga) }}" class="img-fluid rounded-start" style="height: 65px" >
                        <p class="card-title mt-3" style="text-transform: uppercase; font-size: 13px; font-weight: bold">{{ $item->namaLembaga }}</p>
                    </a>
                    {{-- <div class="col-md-5" style="margin-left: 60px">
                        <a href="/informasiPublic/profilKelembagaan/{{ $item->slug }}" style="text-decoration: none; color: black">
    
                            <div class="btnLembaga card mb-3" style="width: 580px;">
                                <div class="row w-100" style="padding: 10px">
                                    <div class="col-md-4" style="width: 20%">
                                        <img src="{{ asset('storage/' . $item->logoLembaga) }}" class="img-fluid rounded-start" style="height: 80px" >
                                    </div>
                                    <div class="col-md-8" style="width: 80%">
                                        <div class="card-body" style="text-align: left">
                                            <h6 class="card-title" style="text-transform: uppercase">{{ $item->namaLembaga }}</h6>
                                            <p class="card-text" style="font-size: 14px">Ketua Lembaga : {{ $item->ketuaLembaga }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                @endforeach
    
            </div>
        </div>
    </div>

    <div id="normal">
        <div style="float: left ">
            <!-- Button trigger modal -->
            <h1 type="button" class="helpInformation bi bi-question-circle-fill btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal"
            style="position: sticky; font-size: 40px;"></h1>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title fs-5 d-inline-flex" id="exampleModalLabel">
                            <p><img src="{{ asset('storage/'. $profil->logoDesa) }}" alt="" height="30px"></p>
                            <p style="font-size: 15px; margin-left: 5px; margin-top: 7px"><b>{{ $other->fullTitle }} {{ $profil->namaDesa }}</b></p>
                        </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: justify">
                        <p><strong>Menu Informasi Kelembagaan Desa</strong> berisi berbagai informasi mengenai seluruh kelembagaan yang berada di {{ $profil->namaDesa }}. Tekan salah satu kelembagaan desa untuk melihat informasi lebih detail.</p>
                        
                    </div>
                    <div class="modal-footer">
                        <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        <div class="px-3" style="text-align: center">
            <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai Kelembagaan {{ $profil->namaDesa }}</h3>
            <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <div class="row py-4">
    
                @foreach ($lembaga as $item)
                    <div class="col-md-5" style="margin-left: 60px">
                        <a href="/informasiPublic/profilKelembagaan/{{ $item->slug }}" style="text-decoration: none; color: black">
    
                            <div class="btnLembaga card mb-3" style="width: 580px;">
                                <div class="row w-100" style="padding: 10px">
                                    <div class="col-md-4" style="width: 20%">
                                        <img src="{{ asset('storage/' . $item->logoLembaga) }}" class="img-fluid rounded-start" style="height: 80px" >
                                    </div>
                                    <div class="col-md-8" style="width: 80%">
                                        <div class="card-body" style="text-align: left">
                                            <h6 class="card-title" style="text-transform: uppercase">{{ $item->namaLembaga }}</h6>
                                            <p class="card-text" style="font-size: 14px">Ketua Lembaga : {{ $item->ketuaLembaga }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
    
            </div>
        </div>
    </div>

    


</div>
@endsection