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
            @if (session()->has('successCreatedDataApbdes'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successCreatedDataApbdes') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif
            @if (session()->has('successUpdatedApbdes'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedApbdes') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif
            @if (session()->has('successDeletedDataApbdes'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedDataApbdes') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackUpdateApbdes">
                    Update APBDES Desa
                </button>
                
            
                <!-- Modal -->
                <div class="modal fade" id="staticBackUpdateApbdes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackUpdateApbdesLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackUpdateApbdesLabel">Update APBDES Desa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/apbdesa/{{ $apbdesa->id }}" method="post" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="modal-body">
                                    <div class="d-block mb-3">
                                        <label for="titleApbdes" class="form-label" style="font-weight: bold">Title Data APBDES</label>
                    
                                        <input type="text" class="form-control @error('titleApbdes') is-invalid @enderror" id="titleApbdes" name="titleApbdes" placeholder="Input Judul APBDES" autofocus required value="{{ old('titleApbdes', $apbdesa->titleApbdes)}}">
                                        @error('titleApbdes')
                                            <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="d-block mb-3">
                                        <label for="fotoApbdes" class="form-label" style="font-weight: bold">File Foto APBDES Desa</label>
                    
                                        {{-- mengirim data lama image --}}
                                        <input type="hidden" name="oldImageApbdesa" value="{{ $apbdesa->fotoApbdes }}">

                                        {{-- menampilkan preview gambar melalui js dari onchange --}}
                                        @if ($apbdesa->fotoApbdes)
                                            <img src="{{ asset('storage/' . $apbdesa->fotoApbdes) }}" class="img-preview-Apbdesa mb-3  d-block"
                                                style="height: 80px">
                                        @else
                                            <img class="img-preview-Apbdesa mb-3 " style="height: 80px">
                                        @endif

                                        <input class="form-control @error('fotoApbdes') is-invalid @enderror" type="file" id="fotoApbdes"
                                            name="fotoApbdes" onchange="previewImageApbdesa()">
                                        @error('fotoApbdes')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">cancel</button>
                                    <button type="submit" class="btn btn-primary">Updated</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-inline-block mb-5" style="text-align: center">
                <h4 style="font-family: 'Raleway', sans-serif; margin-top: 15px; text-transform: uppercase">{{ $apbdesa->titleApbdes }}</h4>
                <img src="{{ asset('storage/' . $apbdesa->fotoApbdes) }}" class="img-fluid rounded-start" alt="..." style="width: 350px">
                {{-- <img src="{{ asset('storage/'. $apbdes->fotoApbdes) }}" class="img-fluid rounded-start" alt="..." style="width: 150px"> --}}
                
            </div>

            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Data APBDES
                </button>
                
            
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data APBDES</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/dataApbdesa" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="d-block mb-3">
                                        <label for="titleData" class="form-label" style="font-weight: bold">Title Data APBDES</label>
                    
                                        <input type="text" class="form-control @error('titleData') is-invalid @enderror" id="titleData" name="titleData" placeholder="Input Title Data APBDDES" autofocus required value="{{ old('titleData')}}">
                                        @error('titleData')
                                            <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="d-block mb-3">
                                        <label for="isiData" class="form-label" style="font-weight: bold">Isi Data Apbdes</label>
                    
                                        <input type="text" class="form-control " id="isiData" name="isiData" placeholder="Input Data APBDDES"  value="{{ old('isiData')}}">
                                        
                                    </div>
                                    <div class="d-block">
                                        <label for="colorData" class="form-label" style="font-weight: bold">Warna Data Apbdes</label>
                                        <table class="table">
                                            <tr>
                                                <td class="table-primary">Primary</td>
                                            </tr>
                                            <tr>
                                                <td class="table-danger">Danger</td>
                                            </tr>
                                            <tr>
                                                <td class="table-success">Success</td>
                                            </tr>
                                            <tr>
                                                <td class="table-warning">Warning</td>
                                            </tr>
                                            <tr>
                                                <td class="table-info">Info</td>
                                            </tr>
                                        </table>
                                        <select class="form-select" name="colorData" id="colorData">
                                            <option value="" selected>None Color </option>
                                            <option value="primary">Primary </option>
                                            <option value="danger">Danger</option>
                                            <option value="success">Success</option>
                                            <option value="warning">Warning</option>
                                            <option value="info">Info</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">cancel</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <table class="table" style="text-align: left; color: black">
                    @foreach ($dataApbdesa as $item)
                        <tr class="table-{{ $item->colorData }}" style="font-weight: {{ ($item->colorData === null) ? '400' : 'bold' }}">
                            <td style="width: 40%; vertical-align: middle">{{ $item->titleData }}</td>
                            <td style="width: 40%; vertical-align: middle">{{ ($item->isiData === null) ? '' : ': Rp. ' }} {{ $item->isiData }}</td>
                            <td style="width: 20%">
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackEdit{{ $item->id }}">Edit</button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Hapus</button>
                            </td>
                        </tr>
                        <!-- Modal delete-->
                        <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete {{ $item->titleData }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin untuk menghapus data {{ $item->titleData }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                        <form action="/dataApbdesa/{{ $item->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Deleted</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal edit-->
                        <div class="modal fade" id="staticBackEdit{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackEditLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <form action="/dataApbdesa/{{ $item->id }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackEditLabel">Edit {{ $item->titleData }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="d-block mb-3">
                                                <label for="titleData" class="form-label" style="font-weight: bold">Title Data APBDES</label>
                                                <input class="form-control @error('titleData') is-invalid @enderror" type="text" name="titleData" id="titleData" placeholder="Input your title data" autofocus required value="{{ old('titleData', $item->titleData)}}">
                                                @error('titleData')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="d-block mb-3">
                                                <label for="isiData" class="form-label" style="font-weight: bold">Isi Data APBDES</label>
                                                <input class="form-control @error('isiData') is-invalid @enderror" type="text" name="isiData" id="isiData" placeholder="Input your isi data" value="{{ old('isiData', $item->isiData)}}">
                                                @error('isiData')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="d-block mb-3">
                                                <label for="colorData" class="form-label" style="font-weight: bold">Warna Data APBDES</label>
                                                <img src="/images/COLORdata.png" alt="">
                                                <select class="form-select mt-2" name="colorData" id="colorData">
                                                    @if ($item->colorData === null)
                                                        <option value="" selected>None Color </option>
                                                    @else
                                                        <option value="{{ $item->colorData }}" selected>{{ $item->colorData }}</option>
                                                    @endif
                                                    
                                                    <option value="primary">Primary </option>
                                                    <option value="danger">Danger</option>
                                                    <option value="success">Success</option>
                                                    <option value="warning">Warning</option>
                                                    <option value="info">Info</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Updated</button>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    
                </table>
            </div>

           
        </div>
    </main>
@endsection