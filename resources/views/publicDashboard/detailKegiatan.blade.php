@extends('../layout/mainPublic')

@section('publicContent')
    <div class="container-fluid py-5 px-4">
        <div class="card mb-3 text-center">

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
                
                <div style="max-height: 500px; width: auto; overflow: hidden;">
                    <img src="{{ asset('storage/' . $kegiatan->fotoUtamaKegiatan) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body mt-3">
                    <h6 class="card-title mb-3" style="font-family: 'Raleway', sans-serif; text-transform: capitalize">{{ $kegiatan->title }}</h6>
                    @if ($kegiatan->lembaga_id === null)
                        <p class="card-text" style="font-weight: bold; font-size: 13px"><small class="text-muted">Penajah Kegiatan Masyarakt Umum </small></p>
                        
                        <p class="card-text" style="font-weight: bold; font-size: 13px; margin-top: -10px"><small class="text-muted">Pelaksanaan Kegiatan {{ \Carbon\Carbon::parse($kegiatan->tanggalKegiatan_at)->format('d F Y') }} | Last Update {{ $kegiatan->created_at->diffForHumans() }}</small></p>

                        <p class="card-text" style="font-weight: bold; font-size: 13px; margin-top: -10px"><small class="text-muted">Last Update {{ $kegiatan->created_at->diffForHumans() }}</small></p>
                    @else
                        <p class="card-text" style="font-weight: bold; font-size: 13px"><small class="text-muted">Penajah Kegiatan {{ $kegiatan->lembaga->singkatan }}</small></p>

                        <p class="card-text" style="font-weight: bold; font-size: 13px;  margin-top: -10px"><small class="text-muted"> Pelaksanaan Kegiatan {{ \Carbon\Carbon::parse($kegiatan->tanggalKegiatan_at)->format('d F Y') }}</small></p>

                        <p class="card-text" style="font-weight: bold; font-size: 13px;  margin-top: -10px"><small class="text-muted">Last Update {{ $kegiatan->updated_at->diffForHumans() }}</small></p>
                    @endif
                    <div style="text-align: justify; margin-top: 30px">
                        <p class="card-text" style="font-size: 13px">{!! $kegiatan->textKegiatan !!}</p>
                    </div>
                </div>
                
                <div class="card-body mt-3" style="background-color: #006029; color: whitesmoke; width: 100%;">
                    <h6  style="font-family: 'Raleway', sans-serif; text-align: center;">Foto Kegiatan</h6>
                </div>
    
                <div class="card-body" style="min-height: 200px">
    
                    @if ($kegiatan->fotoPertamaKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoPertamaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeduaKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeduaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKetigaKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKetigaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeempatKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeempatKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKelimaKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKelimaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeenamKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeenamKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKetujuhKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKetujuhKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKedelapanKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKedelapanKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKesembilanKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKesembilanKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKesepuluhKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKesepuluhKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKesebelasKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKesebelasKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeduabelasKegiatan === null)
                        <div class="row justify-content-center py-3" style="display: none"></div>
                    @else                    
                        <div class="row justify-content-center py-3">
                            <div class="card" style="width: 18rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeduabelasKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
    
                </div>
            </div>

            <div id="normal">
                
                <div style="max-height: 500px; width: auto; overflow: hidden;">
                    <img src="{{ asset('storage/' . $kegiatan->fotoUtamaKegiatan) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body mt-3">
                    <h3 class="card-title mb-4" style="font-family: 'Raleway', sans-serif; text-transform: capitalize">{{ $kegiatan->title }}</h3>
                    @if ($kegiatan->lembaga_id === null)
                        <p class="card-text" style="font-weight: bold"><small class="text-muted">Penajah Kegiatan Masyarakt Umum | Pelaksanaan Kegiatan {{ \Carbon\Carbon::parse($kegiatan->tanggalKegiatan_at)->format('d F Y') }} | Last Update {{ $kegiatan->created_at->diffForHumans() }}</small></p>
                    @else
                        <p class="card-text" style="font-weight: bold"><small class="text-muted">Penajah Kegiatan {{ $kegiatan->lembaga->singkatan }} | Pelaksanaan Kegiatan {{ \Carbon\Carbon::parse($kegiatan->tanggalKegiatan_at)->format('d F Y') }} | Last Update {{ $kegiatan->updated_at->diffForHumans() }}</small></p>
                    @endif
                    <div style="text-align: justify; margin-top: 35px">
                        <p class="card-text">{!! $kegiatan->textKegiatan !!}</p>
                    </div>
                </div>
                
                <div class="card-body mt-3" style="background-color: #006029; color: whitesmoke; width: 100%;">
                    <h5  style="font-family: 'Raleway', sans-serif; text-align: center;">Foto Kegiatan</h5>
                </div>
    
                <div class="row card-body" style="min-height: 200px">
    
                    @if ($kegiatan->fotoPertamaKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoPertamaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeduaKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeduaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKetigaKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKetigaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeempatKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeempatKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKelimaKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKelimaKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeenamKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeenamKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKetujuhKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKetujuhKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKedelapanKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKedelapanKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKesembilanKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKesembilanKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKesepuluhKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKesepuluhKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKesebelasKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKesebelasKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($kegiatan->fotoKeduabelasKegiatan === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $kegiatan->fotoKeduabelasKegiatan) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
    
                </div>
            </div>
            
        </div>
    </div>
@endsection