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
        <div class="justify-content-center">
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
                    <p><strong>Menu Informasi Musyawarah Desa</strong> berisi berbagai informasi mengenai seluruh musyawarah yang dilakukan pemerintahan {{ $profil->namaDesa }}. Tekan salah satu musyawarah desa untuk melihat informasi lebih detail.</p>
                </div>
            </div>
        
            <div class="px-3" style="text-align: center">
                <h6 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai Musyawarah {{ $profil->namaDesa }}</h6>
                <p style="font-size: 13px; text-align: justify">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            </div>
        </div>
    
        <form action="/informasiPublic/musyawarah">
            <div class="row justify-content-center" style="padding: 10px">
                <div class="col-md-6">
                    <div class="input-group mb-3" style="height: 40px">
                        <input type="search" class="form-control" placeholder="Search Kegiatan" name="search" value="{{ request('search') }}">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
    
        @if ($musyawarah->count())
            
            @foreach ($musyawarah as $item)
                <div class="mb-5 row justify-content-center">
                    <div class="card " style="width: 19rem; ">
                        <div style="height: 190px; width: auto; overflow: hidden;">
                            <img src="{{ asset('storage/' . $item->fotoUtamaMusyawarah) }}" class="card-img-top" alt="..."  >
                        </div>
                        <div class="card-body">
                            <h6 class="card-title" style="height: 80px; text-align: center; text-transform: capitalize; font-weight: bold">{{ $item->title }}</h6>
                            <p class="card-text"><small class="text-muted">Last Update {{ $item->updated_at->diffForHumans() }}</small></p>
                            <p class="card-text" style="height: 150px; overflow: hidden; text-align: justify">{{ $item->excerptMusyawarah }} </p>
                        </div>

                        <div class="card-body">
                            <a href="/informasiPublic/musyawarah/{{ $item->slug }}" class="card-link btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        
            <div class="d-flex justify-content-center mb-3" >
                {{ $musyawarah->links('layout.pagination') }}
            </div>
        @else
            <div style="text-align: center">
                <img src="../images/musyawarahNT.png" width="300px">
            </div>
        @endif
        
    </div>
   
    <div id="normal">
        <div class="justify-content-center">
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
                                <p><strong>Menu Informasi Musyawarah Desa</strong> berisi berbagai informasi mengenai seluruh musyawarah yang dilakukan pemerintahan {{ $profil->namaDesa }}. Tekan salah satu musyawarah desa untuk melihat informasi lebih detail.</p>
                            
                            </div>
                            <div class="modal-footer">
                                <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="px-3" style="text-align: center">
                <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai Musyawarah {{ $profil->namaDesa }}</h3>
                <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            </div>
        </div>
    
       <form action="/informasiPublic/musyawarah">
            <div class="row justify-content-center" style="padding: 10px">
                <div class="col-md-6">
                    <div class="input-group mb-3" style="height: 40px">
                        <input type="search" class="form-control" placeholder="Search Kegiatan" name="search" value="{{ request('search') }}">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </div>
       </form>
    
        @if ($musyawarah->count())
        <div class="card mb-3 text-center">
            <div style="max-height: 500px; width: auto; overflow: hidden;">
                <img src="{{ asset('storage/' . $musyawarah[0]->fotoUtamaMusyawarah) }}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h4 class="card-title" style="font-family: 'Raleway', sans-serif; text-transform: capitalize; font-weight: bold">{{ $musyawarah[0]->title }}</h4>
                <p class="card-text"><small class="text-muted">Last Update {{ $musyawarah[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text" style="height: 80px; overflow: hidden; text-align: justify">{{ $musyawarah[0]->excerptMusyawarah }}</p>
            </div>
    
            <div class="card-body">
                <a href="/informasiPublic/musyawarah/{{ $musyawarah[0]->slug }}" class="card-link btn btn-success">Read More</a>
            </div>
        </div>
    
        <div class="row py-4">
            
            @foreach ($musyawarah->skip(1) as $item)
                <div class="col-md-3 mb-5">
                    <div class="card" style="width: 19rem; ">
                        <div style="height: 190px; width: auto; overflow: hidden;">
                            <img src="{{ asset('storage/' . $item->fotoUtamaMusyawarah) }}" class="card-img-top" alt="..."  >
                        </div>
                        <div class="card-body">
                            <h6 class="card-title" style="height: 80px; text-align: center; text-transform: capitalize; font-weight: bold">{{ $item->title }}</h6>
                            <p class="card-text"><small class="text-muted">Last Update {{ $item->updated_at->diffForHumans() }}</small></p>
                            <p class="card-text" style="height: 150px; overflow: hidden; text-align: justify">{{ $item->excerptMusyawarah }} </p>
                        </div>
    
                        <div class="card-body">
                            <a href="/informasiPublic/musyawarah/{{ $item->slug }}" class="card-link btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
    
            
        </div>
    
        <div class="d-flex justify-content-center mb-3" >
            {{ $musyawarah->links('layout.pagination') }}
        </div>
        @else
        <div style="text-align: center">
            <img src="../images/musyawarahNT.png" width="500px">
        </div>
        @endif
        
    </div>
   

</div>
@endsection