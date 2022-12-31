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
                <p><strong>Menu Profil Kelembagaan</strong> berisi seluruh informasi mengenai suatu kelembagaan yang berada di {{ $profil->namaDesa }}</p>
            </div>
        </div>
    
        <div style="text-align: center">
            <h6 class="text-center px-2" style="font-family: 'Raleway', sans-serif; text-transform: capitalize">Berikut Merupakan Informasi Mengenai Profil {{ $lembaga->singkatan }} {{ $profil->namaDesa }}</h6>
            <p style="font-size: 13px; text-align: justify">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>

            <div class="row" style="text-align: center; padding: 10px">
                <div class="card" style="width: 1300px; min-height: 500px; padding: 5px">
                    <div  style="width: 100%; height: 100%; background-color: white;">
    
                        <div class="d-inline-block justify-content-center">
                            <img src="{{ asset('storage/'. $lembaga->logoLembaga) }}" class="img-fluid rounded-start" alt="..." style="width: 100px">
                            <h6 style="font-family: 'Raleway', sans-serif; margin-top: 15px; text-transform: uppercase">{{ $lembaga->singkatan }}</h6>
                        </div>
    
                        <div class="py-4">
                            <table class="table" style="text-align: left; color: black">
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Nama Kelembagaan</td>
                                    <td style="font-size: 13px;">: {{ $lembaga->namaLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Ketua Kelembagaan</td>
                                    <td style="font-size: 13px;">: {{ $lembaga->ketuaLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Desa</td>
                                    <td style="font-size: 13px;">: {{ $lembaga->desaLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Kecamatan</td>
                                    <td style="font-size: 13px;">: {{ $lembaga->kecamatanLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Kabupaten</td>
                                    <td style="font-size: 13px;">: {{ $lembaga->kabupatenLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px; font-weight: bold">Provinsi</td>
                                    <td style="font-size: 13px;">: {{ $lembaga->provinsiLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px;; font-weight: bold">Jumlah Keanggotaan</td>
                                    <td style="font-size: 13px;">: {{ $lembaga->jumlahAnggota }} Orang</td>
                                </tr>
                            </table>
                        </div>
    
                        <div class=" p-2">
                            <div id="sejarah" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Sejarah</h6>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    <p style="font-size: 13px">{!! $lembaga->sejarahLembaga !!}</p>
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
    
                            <div id="tugas" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Tugas Kelembagaan</h6>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    <p style="font-size: 13px">
                                        {!! $lembaga->tugasLembaga !!}
                                    </p>
                                </div>
                            </div>
    
                            <div id="fungsiStrktur" class="mb-5 ">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Fungsi dan Struktur Organisasi Desa</h6>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    
                                    @foreach ($contact as $item)
                                        <div style="width: 100%; text-align: left; margin-top: 20px; margin-bottom: 25px; border-bottom: 1px solid rgb(156, 156, 156)" class="d-block">
                                            <div >
                                                <p style=" font-family: 'Raleway', sans-serif; text-align: center">{{ $item->jabatan->posisiJabatan }}</p>
                                                <div class="d-block" style="text-align: center">
                                                    @if ($item->fotoAnggota)
                                                        <img src="{{ asset('storage/'. $item->fotoAnggota) }}" alt="" height="200px" width="135px">
                                                    @else
                                                        <img src="/images/pas.png" alt="" height="150px" width="135px" style="overflow: hidden">
                                                    @endif
                                                    <div class="d-block mt-4" style="text-align: left">

                                                        <table class="table">
                                                            <tr>
                                                                <td style="font-size: 13px; font-weight: bold">Nama</td>
                                                                <td style="font-size: 13px;">: {{ $item->namaAnggota }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: 13px; font-weight: bold">Alamat</td>
                                                                <td style="font-size: 13px;">: {{ $item->alamatAnggota }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: 13px; font-weight: bold">Pendidikan</td>
                                                                <td style="font-size: 13px;">: {{ $item->pendidikanAnggota }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: 13px; font-weight: bold">Pekerjaan</td>
                                                                <td style="font-size: 13px;">: {{ $item->pekerjaanAnggota }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div style="margin-bottom: 10px">
                                                <p style="font-family: 'Raleway', sans-serif; font-size: 13px">{{ $item->jabatan->posisiJabatan }} Memiliki Fungsi Sebagai Berikut :</p>
                                                <p style="font-size: 13px">{!! $item->jabatan->fungsiJabatan !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
    
                                </div>
                            </div>
    
                            <div id="kegiatanLembaga" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Kegiatan Kelembagaan</h6>
                                </div>
    
                                @if ($kegiatan->count())
                                    
                                        
                                    @foreach ($kegiatan as $item)
                                        @csrf
                                        <div class="row justify-content-center py-4">
                                            <div class="card" style="width: 18rem; ">
                                                <div style="height: 190px; overflow: hidden;">
                                                    <img src="{{ asset('storage/'. $item->fotoUtamaKegiatan) }}" class="card-img-top" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-title" style="height: 80px; text-align: center; text-transform: capitalize; font-weight: bold">{{ $item->title }}</h6>
                                                    <p class="card-text mt-4" style="font-size: 13px"><small class="text-muted">Last Update {{ $item->created_at->diffForHumans() }}</small></p>
                                                    <p class="card-text" style="height: 150px; overflow: hidden; text-align: justify; font-size: 13px">{{ $item->excerptKegiatan }} </p>
                                                </div>
                                
                                                <div class="card-body">
                                                    <a href="/informasiPublic/kegiatan/{{ $item->slug }}" class="card-link btn btn-success">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h6 style="margin-top: 50px">Belum Ada Kegiatan</h6>
                                @endif
                                
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
                        <p><strong>Menu Profil Kelembagaan</strong> berisi seluruh informasi mengenai suatu kelembagaan yang berada di {{ $profil->namaDesa }}</p>
                        
                    </div>
                    <div class="modal-footer">
                        <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        <div class="px-3" style="text-align: center">
            <h3 class="text-center" style="font-family: 'Raleway', sans-serif; text-transform: capitalize">Berikut Merupakan Informasi Mengenai Profil {{ $lembaga->singkatan }} {{ $profil->namaDesa }}</h3>
            <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <div class="row" style="text-align: center; padding: 10px">
                <div class="card" style="width: 1300px; min-height: 500px; background-color: whitesmoke; padding: 10px">
                    <div class="card" style="width: 100%; height: 100%; background-color: white; padding: 20px">
    
                        <div class="d-inline-block justify-content-center">
                            <img src="{{ asset('storage/'. $lembaga->logoLembaga) }}" class="img-fluid rounded-start" alt="..." style="width: 150px">
                            <h5 style="font-family: 'Raleway', sans-serif; margin-top: 15px; text-transform: uppercase">{{ $lembaga->singkatan }}</h5>
                        </div>
    
                        <div class="py-4">
                            <table class="table" style="text-align: left; color: black">
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Nama Kelembagaan</td>
                                    <td style="width: 85%">: {{ $lembaga->namaLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Ketua Kelembagaan</td>
                                    <td style="width: 85%">: {{ $lembaga->ketuaLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Desa</td>
                                    <td style="width: 85%">: {{ $lembaga->desaLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Kecamatan</td>
                                    <td style="width: 85%">: {{ $lembaga->kecamatanLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Kabupaten</td>
                                    <td style="width: 85%">: {{ $lembaga->kabupatenLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Provinsi</td>
                                    <td style="width: 85%">: {{ $lembaga->provinsiLembaga }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 15%; font-weight: bold">Jumlah Keanggotaan</td>
                                    <td style="width: 85%">: {{ $lembaga->jumlahAnggota }} Orang</td>
                                </tr>
                            </table>
                        </div>
    
                        <div class=" p-2">
                            <div id="sejarah" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Sejarah</h5>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    {!! $lembaga->sejarahLembaga !!}
                                </div>
                            </div>
    
                            <div id="visiMisi" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Visi Misi</h5>
                                </div>
                                <div class="d-inline-flex"  style="width: 100%">
                                    <div style="padding: 15px; width: 50%; margin-top: 8px">
                                        <h4 style="font-family: 'Raleway', sans-serif; text-align: left">Visi</h4>
                                        <p style="margin-top: 20px; text-align: justify;" class="px-2">{!! $lembaga->visi !!}</p>
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
    
                            <div id="tugas" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Tugas Kelembagaan</h5>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    {!! $lembaga->tugasLembaga !!}
                                </div>
                            </div>
    
                            <div id="fungsiStrktur" class="mb-5 ">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Fungsi dan Struktur Organisasi Desa</h5>
                                </div>
                                <div style="text-align: justify; margin-top: 20px">
                                    
                                    @foreach ($contact as $item)
                                        <div style="width: 100%; text-align: left; margin-top: 20px; margin-bottom: 25px; border-bottom: 1px solid rgb(156, 156, 156)" class="d-inline-flex">
                                            <div style="width: 50%;">
                                                <p style=" font-family: 'Raleway', sans-serif;">{{ $item->jabatan->posisiJabatan }}</p>
                                                <div class="d-inline-flex">
                                                    @if ($item->fotoAnggota)
                                                        <img src="{{ asset('storage/'. $item->fotoAnggota) }}" alt="" height="200px" width="135px">
                                                    @else
                                                        <img src="/images/pas.png" alt="" height="150px" width="135px" style="overflow: hidden">
                                                    @endif
                                                    <div class="d-block" style="margin-left: 10px">
                                                        <table class="table">
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td>: {{ $item->namaAnggota }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>: {{ $item->alamatAnggota }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pendidikan</td>
                                                                <td>: {{ $item->pendidikanAnggota }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pekerjaan</td>
                                                                <td>: {{ $item->pekerjaanAnggota }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="width: 50%; margin-bottom: 10px">
                                                <p style="font-family: 'Raleway', sans-serif;">{{ $item->jabatan->posisiJabatan }} Memiliki Fungsi Sebagai Berikut :</p>
                                                <p>{!! $item->jabatan->fungsiJabatan !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
    
                                </div>
                            </div>
    
                            <div id="kegiatanLembaga" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Kegiatan Kelembagaan</h5>
                                </div>
    
                                @if ($kegiatan->count())
                                    <div class="row py-4" style="margin-left: 40px">
                                        
                                        @foreach ($kegiatan as $item)
                                            @csrf
                                            <div class="col-md-4 mb-5">
                                                <div class="card" style="width: 19rem; ">
                                                    <div style="height: 190px; overflow: hidden;">
                                                        <img src="{{ asset('storage/'. $item->fotoUtamaKegiatan) }}" class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="card-body">
                                                        <h6 class="card-title" style="height: 80px; text-align: center; text-transform: capitalize; font-weight: bold">{{ $item->title }}</h6>
                                                        <p class="card-text"><small class="text-muted">Last Update {{ $item->created_at->diffForHumans() }}</small></p>
                                                        <p class="card-text" style="height: 150px; overflow: hidden; text-align: justify">{{ $item->excerptKegiatan }} </p>
                                                    </div>
                                    
                                                    <div class="card-body">
                                                        <a href="/informasiPublic/kegiatan/{{ $item->slug }}" class="card-link btn btn-success">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <h6 style="margin-top: 50px">Belum Ada Kegiatan</h6>
                                @endif
                                
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection