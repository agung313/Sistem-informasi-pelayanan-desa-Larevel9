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
                <p><strong>Menu Profil Desa</strong> berisi mengenai informasi mengenai sejarah, jumlah penduduk, dan lain sebagainya yang berkaitan dengan {{ $profil->namaDesa }}</p>
            </div>
        </div>
        
    
        <div style="text-align: center">
            <h6 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai Profil {{ $profil->namaDesa }}</h6>
            <p style="text-align: justify; font-size: 13px">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <div class="row" style="text-align: center;">
                <div class="card" style="width: 1300px;">
                    <div  style="width: 100%; height: 100%; padding: 20px">
    
                        <div class="d-inline-block justify-content-center">
                            <img src="{{ asset('storage/'. $profil->logoDesa) }}" class="img-fluid rounded-start" alt="..." style="width: 100px">
                            <h5 style="font-family: 'Raleway', sans-serif; margin-top: 15px">{{ $profil->namaDesa }}</h5>
                        </div>
    
                        <div class="py-4">
                            <table class="table" style="text-align: left; color: black">
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Nama Desa</td>
                                    <td style="font-size: 13px;">: {{ $profil->namaDesa }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Kepala Desa</td>
                                    <td style="font-size: 13px;">: {{ $profil->kepalaDesa }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Kecamatan</td>
                                    <td style="font-size: 13px;">: {{ $profil->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Kabupaten</td>
                                    <td style="font-size: 13px;">: {{ $profil->kabupaten }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Provinsi</td>
                                    <td style="font-size: 13px;">: R{{ $profil->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Luas Desa</td>
                                    <td style="font-size: 13px;">: {{ $profil->luasDesa }} Km<sup>2</sup></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Jumlah Dusun</td>
                                    <td style="font-size: 13px;">: {{ $profil->jumlahDusun }} Dusun</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Jumlah Keluarga</td>
                                    <td style="font-size: 13px;">: {{ $profil->jumlahKeluarga }} Keluarga</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Jumlah Jiwa</td>
                                    <td style="font-size: 13px;">: {{ $profil->jumlahJiwa }} Jiwa</td>
                                </tr>
                            </table>
                        </div>
    
                        <div class="mb-4 p-2">
                            <div id="sejarah" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Sejarah</h6>
                                </div>
                                <div style="text-align: justify; margin-top: 10px">
                                    <p style="font-size: 13px">{!! $profil->sejarah !!}</p>
                                </div>
                            </div>
    
                            <div id="visiMisi" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Visi Misi</h6>
                                </div>
                                <div class="d-inline-block"  style="width: 100%">
                                    <div style="padding: 5px; margin-top: 8px">
                                        <h6 style="font-family: 'Raleway', sans-serif; text-align: left">Visi</h6>
                                        <div  style="margin-top: 20px; text-align: justify;" class="px-2">
                                            <p style="font-size: 13px">{!! $lembaga->visi !!}</p>
                                        </div>
                                    </div>
                                    <div style="padding: 5px; margin-top: 8px; padding-bottom: 0">
                                        <h6 style="font-family: 'Raleway', sans-serif; text-align: left">Misi</h6>
                                        <div class="d-block" style="margin-top: 20px">
                                            <div style="text-align: left;" class="px-2">
                                                <p style="font-size: 13px">{!! $lembaga->misi !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div id="demografi" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Demografi</h6>
                                </div>
                                <div style="text-align: justify; margin-top: 10px">
                                    @foreach ($demografis as $demografi)
                                    <div class="border-bottom mb-3 d-block" style="padding: 5px">
                                        <h6 style="font-family: 'Raleway', sans-serif;">{{ $demografi->titleDemografi }}</h6>
                                        <p style="font-size: 13px">{!! $demografi->isiTitleDemografi !!}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
    
    
                            <div id="fungsiStrktur">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Fungsi dan Struktur Organisasi Desa</h6>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    @foreach ($jabatan as $item)

                                        @if ($item->lembaga_id == 1)
                                            <div class="d-block border-bottom mb-4" style="padding: 5px">
                                                <h6 style="font-family: 'Raleway', sans-serif;">{{ $item->posisiJabatan }}</h6>
                                                <p style="font-size: 13px">{!! $item->fungsiJabatan !!}</p>
                                            </div>
                                        @else
                                            <input type="hidden" name="">
                                        @endif
                                        
                                        {{-- <div style="width: 100%; text-align: left; margin-top: 25px" class="d-inline-flex">
                                            @if ($item->lembaga_id == 1)
                                                <div style="width: 30%; font-family: 'Raleway', sans-serif; ">
                                                    <p>{{ $item->posisiJabatan }}</p>
                                                </div>
                                                <div style="width: 70%">
                                                    <p style="font-family: 'Raleway', sans-serif;">{{ $item->posisiJabatan }} Memiliki Fungsi Sebagai Berikut :</p>
                                                    <p>{!! $item->fungsiJabatan !!}</p>
                                                </div>
                                            @else
                                                <input type="hidden" name="">
                                            @endif
                                            
                                        </div> --}}
    
                                    @endforeach
    
                                    
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
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
                        <p><strong>Menu Profil Desa</strong> berisi mengenai informasi mengenai sejarah, jumlah penduduk, dan lain sebagainya yang berkaitan dengan {{ $profil->namaDesa }}</p>
                        
                    </div>
                    <div class="modal-footer">
                        <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        <div class="px-3" style="text-align: center">
            <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai Profil {{ $profil->namaDesa }}</h3>
            <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <div class="row" style="text-align: center; padding: 10px">
                <div class="card" style="width: 1300px; background-color: whitesmoke; padding: 10px">
                    <div class="card" style="width: 100%; height: 100%; background-color: white; padding: 20px">
    
                        <div class="d-inline-block justify-content-center">
                            <img src="{{ asset('storage/'. $profil->logoDesa) }}" class="img-fluid rounded-start" alt="..." style="width: 150px">
                            <h5 style="font-family: 'Raleway', sans-serif; margin-top: 15px">{{ $profil->namaDesa }}</h5>
                        </div>
    
                        <div class="py-4">
                            <table class="table" style="text-align: left; color: black">
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Nama Desa</td>
                                    <td style="width: 85%">: {{ $profil->namaDesa }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Kepala Desa</td>
                                    <td style="width: 85%">: {{ $profil->kepalaDesa }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Kecamatan</td>
                                    <td style="width: 85%">: {{ $profil->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Kabupaten</td>
                                    <td style="width: 85%">: {{ $profil->kabupaten }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Provinsi</td>
                                    <td style="width: 85%">: R{{ $profil->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Luas Desa</td>
                                    <td style="width: 85%">: {{ $profil->luasDesa }} Km<sup>2</sup></td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Jumlah Dusun</td>
                                    <td style="width: 85%">: {{ $profil->jumlahDusun }} Dusun</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Jumlah Keluarga</td>
                                    <td style="width: 85%">: {{ $profil->jumlahKeluarga }} Keluarga</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Jumlah Jiwa</td>
                                    <td style="width: 85%">: {{ $profil->jumlahJiwa }} Jiwa</td>
                                </tr>
                            </table>
                        </div>
    
                        <div class="mb-4 p-2">
                            <div id="sejarah" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Sejarah</h5>
                                </div>
                                <div style="text-align: justify; margin-top: 10px">
                                    {!! $profil->sejarah !!}
                                </div>
                            </div>
    
                            <div id="visiMisi" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Visi Misi</h5>
                                </div>
                                <div class="d-inline-flex"  style="width: 100%">
                                    <div style="padding: 15px; width: 50%; margin-top: 8px">
                                        <h4 style="font-family: 'Raleway', sans-serif; text-align: left">Visi</h4>
                                        <div  style="margin-top: 20px; text-align: justify;" class="px-2">
                                            <p>{!! $lembaga->visi !!}</p>
                                        </div>
                                    </div>
                                    <div style="padding: 15px; width: 50%; margin-top: 8px; padding-bottom: 0">
                                        <h4 style="font-family: 'Raleway', sans-serif; text-align: left">Misi</h4>
                                        <div class="d-block" style="margin-top: 20px">
                                            <div style="text-align: left;" class="px-2">
                                                <p>{!! $lembaga->misi !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div id="demografi" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Demografi</h5>
                                </div>
                                <div style="text-align: justify; margin-top: 10px">
                                   <table class="table">
                                        @foreach ($demografis as $demografi)
                                            <tr>
                                                <td><b>{{ $demografi->titleDemografi }}</b></td>
                                                <td>: {!! $demografi->isiTitleDemografi !!}</td>
                                            </tr>
                                        @endforeach
                                        
                                   </table>
                                </div>
                            </div>
    
    
                            <div id="fungsiStrktur">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Fungsi dan Struktur Organisasi Desa</h5>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    @foreach ($jabatan as $item)
                                        
                                        <div style="width: 100%; text-align: left; margin-top: 25px" class="d-inline-flex">
                                            @if ($item->lembaga_id == 1)
                                                <div style="width: 30%; font-family: 'Raleway', sans-serif; ">
                                                    <p>{{ $item->posisiJabatan }}</p>
                                                </div>
                                                <div style="width: 70%">
                                                    <p style="font-family: 'Raleway', sans-serif;">{{ $item->posisiJabatan }} Memiliki Fungsi Sebagai Berikut :</p>
                                                    <p>{!! $item->fungsiJabatan !!}</p>
                                                </div>
                                            @else
                                                <input type="hidden" name="">
                                            @endif
                                            
                                        </div>
    
                                    @endforeach
    
                                    
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection