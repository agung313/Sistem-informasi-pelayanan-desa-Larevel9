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
                    <img src="{{ asset('storage/' . $musyawarah->fotoUtamaMusyawarah) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body mt-3">
                    <h6 class="card-title mb-3" style="font-family: 'Raleway', sans-serif; text-transform: capitalize; font-weight: bold">{{ $musyawarah->title }}</h6>
                    <p class="card-text" style="font-weight: bold; font-size: 13px"><small class="text-muted">Pelaksanaan musyawarah - {{ \Carbon\Carbon::parse($musyawarah->tanggalMusyawarah_at)->format('d F Y') }} </small></p>

                    <p class="card-text" style="font-weight: bold; font-size: 13px; margin-top: -10px"><small class="text-muted">Last Update {{ $musyawarah->updated_at->diffForHumans() }}</small></p>

                    <div style="text-align: justify; margin-top: 30px">
                        <p class="card-text" style="font-size: 13px">{!! $musyawarah->textMusyawarah !!}</p>
                    </div>
                </div>
                
                <div class="card-body mt-3" style="background-color: #006029; color: whitesmoke; width: 100%;">
                    <h6  style="font-family: 'Raleway', sans-serif; text-align: center;">Foto Musyawarah</h6>
                </div>
    
                <div class="row card-body" style="min-height: 200px">
    
                    @if ($musyawarah->fotoPertamaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoPertamaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeduaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeduaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKetigaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKetigaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeempatMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeempatMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKelimaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKelimaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeenamMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeenamMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKetujuhMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKetujuhMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKedelapanMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKedelapanMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKesembilanMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKesembilanMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKesepuluhMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKesepuluhMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKesebelasMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKesebelasMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeduabelasMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeduabelasMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
    
                </div>
            </div>

            <div id="normal">

                <div style="max-height: 500px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $musyawarah->fotoUtamaMusyawarah) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body mt-3">
                    <h3 class="card-title mb-4" style="font-family: 'Raleway', sans-serif; text-transform: capitalize; font-weight: bold">{{ $musyawarah->title }}</h3>
                        <p class="card-text" style="font-weight: bold"><small class="text-muted">Pelaksanaan musyawarah - {{ \Carbon\Carbon::parse($musyawarah->tanggalMusyawarah_at)->format('d F Y') }} | Last Update {{ $musyawarah->updated_at->diffForHumans() }}</small></p>
                        
                    <div style="text-align: justify; margin-top: 35px">
                        <p class="card-text">{!! $musyawarah->textMusyawarah !!}</p>
                    </div>
                </div>
                
                <div class="card-body mt-3" style="background-color: #006029; color: whitesmoke; width: 100%;">
                    <h5  style="font-family: 'Raleway', sans-serif; text-align: center;">Foto Musyawarah</h5>
                </div>
    
                <div class="row card-body" style="min-height: 200px">
    
                    @if ($musyawarah->fotoPertamaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoPertamaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeduaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeduaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKetigaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKetigaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeempatMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeempatMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKelimaMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKelimaMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeenamMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeenamMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKetujuhMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKetujuhMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKedelapanMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKedelapanMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKesembilanMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKesembilanMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKesepuluhMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKesepuluhMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKesebelasMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKesebelasMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
                    @if ($musyawarah->fotoKeduabelasMusyawarah === null)
                        <div class="col-md-3 mb-5" style="display: none"></div>
                    @else                    
                        <div class="col-md-3 mb-5">
                            <div class="card" style="width: 19rem; ">
                                <div >
                                    <img src="{{ asset('storage/' . $musyawarah->fotoKeduabelasMusyawarah) }}" class="card-img-top" alt="..." style="height: 190px; overflow: hidden;" >
                                </div>
                            </div>
                        </div>
                    @endif
    
    
                </div>
            </div>
        </div>
    </div>
@endsection