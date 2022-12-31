@extends('../layout/mainAdmin')

@section('adminContent')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            {{-- <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
                </button>
            </div> --}}
        </div>
        <div class="card" style="width: 100%; height: 100%; background-color: white; padding: 20px">
            <h2 style="text-transform: capitalize">{{ $pengaduan->title }}</h2>
            <h6 style="text-transform: capitalize">Lokasi : {{ $pengaduan->tempatKejadian }}</h6>
            <div class=" py-4">
                
                <div class="border-bottom mb-5">

                    <h6 class="mb-3"><b>Foto Pengaduan</b></h6>
                    <div class="mb-4" >
                        @if ($pengaduan->fotoPertama === null && $pengaduan->fotoKedua === null && $pengaduan->fotoKetiga === null)
                            <h6>Tidak ada foto dalam pengaduan ini</h6>
                        @endif
    
                        @if ($pengaduan->fotoPertama)    
                            <div style="background-color: grey; margin-bottom: 20px ">
                                <img src="{{ asset('storage/' . $pengaduan->fotoPertama) }}" class="d-block w-100" alt="..." height="450px">
                            </div>
                        @endif
    
                        @if ($pengaduan->fotoKedua)
                            <div style="background-color: grey; margin-bottom: 20px ">
                                <img src="{{ asset('storage/' . $pengaduan->fotoKedua) }}" class="d-block w-100" alt="..." height="450px">
                            </div>
                        @endif
    
                        @if ($pengaduan->fotoKetiga)    
                            <div style="background-color: grey; margin-bottom: 20px ">
                                <img src="{{ asset('storage/' . $pengaduan->fotoKetiga) }}" class="d-block w-100" alt="..." height="450px">
                            </div>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="mb-4 mt-4">
                        <h6 class="form-lambel"><b>Title Pengaduan</b></h6>
                        <input type="text" class="form-control" value="{{ $pengaduan->title }}" disabled>
                    </div>

                    <div class="mb-4 ">
                        <h6 class="form-lambel"><b>Tempat Kejadian</b></h6>
                        <input type="text" class="form-control" value="{{ $pengaduan->tempatKejadian }}" disabled>
                    </div>

                    <div class="mb-5 ">
                        <h6 class="form-lambel"><b>Detail Pengaduan</b></h6>
                        <div style="padding: 10px; background-color: #e9ecef; border-radius: 5px; width: 100%; min-height: 300px; border: 1px solid #c3c6c9">
                            <p>{!! $pengaduan->textPengaduan !!}</p>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </main>
@endsection