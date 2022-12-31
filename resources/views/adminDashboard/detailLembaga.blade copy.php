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
            @if (session()->has('successUpdatedLembaga'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedLembaga') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successUpdatedJabatan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedJabatan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successUpdatedAnggota'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedAnggota') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successUpdatedKegiatan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedKegiatan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successCreatedJabatan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successCreatedJabatan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successCreatedAnggota'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successCreatedAnggota') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successCreatedKegiatan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successCreatedKegiatan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedJabatan'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedJabatan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedAnggota'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedAnggota') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedKegiatan'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedKegiatan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif


            <div>
                <a href="/lembaga/{{ $lembaga->id }}/edit" class="btn btn-primary">Update Profil {{ $lembaga->singkatan }}</a>
            </div>
            <div class="d-inline-block " style="text-align: center">
                {{-- <img src="{{ asset('storage/'. $lembaga->logoLembaga) }}" class="img-fluid rounded-start" alt="..." style="width: 150px"> --}}
                <img src="/images/logo/{{ $lembaga->logoLembaga }}" class="img-fluid rounded-start" alt="..." style="width: 150px">
                <h5 style="font-family: 'Raleway', sans-serif; margin-top: 15px; text-transform: uppercase">{{ $lembaga->namaLembaga }}</h5>
            </div>

            <div class="py-4">
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <td style="width: 15%; font-weight: bold">Nama Lembaga</td>
                        <td style="width: 85%">: {{ $lembaga->namaLembaga }}</td>
                    </tr>
                    <tr>
                        <td style="width: 15%; font-weight: bold">Singkatan Lembaga</td>
                        <td style="width: 85%">: {{ $lembaga->singkatan }}</td>
                    </tr>
                    <tr>
                        <td style="width: 15%; font-weight: bold">Ketua Lembaga</td>
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
                        <td style="width: 85%">: R{{ $lembaga->provinsiLembaga }}</td>
                    </tr>
                    <tr>
                        <td style="width: 15%; font-weight: bold">Jumlah Anggota</td>
                        <td style="width: 85%">: {{ $lembaga->jumlahAnggota }} Orang</td>
                    </tr>
                </table>
            </div>

            <div class="mb-4 p-2">
                <div id="sejarah" >
                    <div style="background-color: #006029; color: whitesmoke; width: 100%">
                        <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Sejarah Lembaga</h5>
                    </div>
                    <div style="text-align: justify; margin-top: 10px">
                        {!! $lembaga->sejarahLembaga !!}
                    </div>
                </div>
            </div>

            <div id="visiMisi" class="mb-4 p-2">
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

            <div class="mb-4 p-2">
                <div id="tugas" >
                    <div style="background-color: #006029; color: whitesmoke; width: 100%">
                        <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Tugas Lembaga</h5>
                    </div>
                    <div style="text-align: justify; margin-top: 10px">
                        {!! $lembaga->tugasLembaga !!}
                    </div>
                </div>
            </div>

            <div id="fungsiStrktur" class="mb-4 p-2 ">
                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Fungsi dan Struktur Organisasi Desa</h5>
                </div>
                
                <div id="jabatan">
                    <div class="py-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createJabatan">Tambah Data Jabatan </button>

                        {{-- modal create Jabatan --}}
                        <div class="modal fade" id="createJabatan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createJabatanLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="createJabatanLabel">Create Jabatan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/jabatan" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="lembaga_id" value="{{ $lembaga->id }}">
                                            
                                            <div class="mb-3">
                                                <label for="posisiJabatan" class="form-label"><b>Nama Jabatan</b></label>
                                                <input type="text" class="form-control @error('posisiJabatan') is-invalid @enderror" name="posisiJabatan" id="posisiJabatan" placeholder="Input Nama Jabatan" value="{{ old('posisiJabatan') }}" required autofocus>

                                                @error('posisiJabatan')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="fungsiJabatan" class="form-label"><b>Fungsi Jabatan</b></label>
                                                {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                                                @error('fungsiJabatan')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <input id="fungsiJabatan" type="hidden" name="fungsiJabatan"
                                                    value="{{ old('fungsiJabatan')}}">
                                                <trix-editor input="fungsiJabatan"></trix-editor>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Create Jabatan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-4" style="margin-left: 40px">
                        
                        <table class="table" style="text-align: left; color: black">
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th>Lembaga</th>
                                <th style="text-align: center">Action</th>
                            </tr>
    
                            <tr style="width: 100%">
                                <td style="vertical-align: middle; width: 5%; ">1</td>
                                <td style="vertical-align: middle;  ">{{ $jabatan[0]->posisiJabatan }}</td>
                                {{-- <td style="vertical-align: middle; width: 30%; ">{{ $item->lembaga->singkatanLembaga}}</td> --}}
                                <td style="vertical-align: middle; text-transform: uppercase ">{{ $jabatan[0]->lembaga->singkatan }}</td>
                                <td style="text-align: center;  ">
                                    <a href="/jabatan/{{ $jabatan[0]->id }}/edit" class="btn btn-warning" style="width: 100px">Edit</a>
                                </td>
                            </tr>


                            <?php $i = 2; ?>
                            @foreach ($jabatan->skip(1) as $item) 
                                <tr style="width: 100%">
                                    <td style="vertical-align: middle; width: 5%; ">{{ $i++ }}</td>
                                    <td style="vertical-align: middle;  ">{{ $item->posisiJabatan }}</td>
                                    {{-- <td style="vertical-align: middle; width: 30%; ">{{ $item->lembaga->singkatanLembaga}}</td> --}}
                                    <td style="vertical-align: middle; text-transform: uppercase ">{{ $item->lembaga->singkatan }}</td>
                                    <td style="text-align: center;  ">
                                        <a class="btn btn-warning" href="/jabatan/{{ $item->id }}/edit">Edit</a>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Hapus</button>
                                    </td>
                                </tr>
        
                                <!-- Modal delete-->
                                <div class="modal fade" id="staticBackdrop{{ $item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete {{ $item->posisiJabatan }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin untuk menghapus {{ $item->posisiJabatan }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                                <form action="/jabatan/{{ $item->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Deleted</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            @endforeach
                        </table>
                    </div>
                </div>

                <div id="anggota" class="mt-2">
                    <div class="py-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateAnggota">Tambah Data Anggota </button>

                        <!-- Modal cretae-->
                        <div class="modal fade" id="modalCreateAnggota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCreateAnggotaLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalCreateAnggotaLabel">Edit Anggota</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/anggotas" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="lembaga_id" value="{{ $lembaga->id }}">
                                        <div class="modal-body">
                                            <script>
                                                function imgPreviewAnggota(){
                                                    // tangkap variabel image dengan id image
                                                    const fotoAnggota = document.querySelector('#fotoAnggota');

                                                    // ambil tag img kosong untuk preview
                                                    const imgPreview = document.querySelector('.img-previewAnggota');

                                                    // menangkap gambarnya dari url
                                                    const oFReader = new FileReader();
                                                    oFReader.readAsDataURL(fotoAnggota.files[0]);

                                                    
                                                    oFReader.onload = function(oFREvent){
                                                    imgPreview.src = oFREvent.target.result;
                                                    }
                                                }
                                            </script>
                                            <div class="mb-2" style="width: 100px; height: 130px; background-color: grey">
                                                <img class="img-previewAnggota" style="width: 100px; height: 130px;">
                                                
                                            </div>
                                            <div class="mb-3">

                                                <label for="fotoAnggota" class="form-label" style="font-weight: bold">Logo Lembaga</label>

                                                <input class="form-control @error('fotoAnggota') is-invalid @enderror" type="file" id="fotoAnggota" name="fotoAnggota" onchange="imgPreviewAnggota()">
                                                @error('fotoAnggota')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror

                                                
                                            </div>

                                            <div class="mb-3">
                                                <label for="namaAnggota" class="form-label"><b>Nama Anggota</b></label>

                                                <input type="text" class="form-control @error('namaAnggota') is-invalid @enderror" name="namaAnggota" id="namaAnggota" placeholder="Input Nama Anggota" value="{{ old('namaAnggota') }}" required autofocus>

                                                @error('namaAnggota')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="alamatAnggota" class="form-label"><b>Alamat Anggota</b></label>

                                                <input type="text" class="form-control @error('alamatAnggota') is-invalid @enderror" name="alamatAnggota" id="alamatAnggota" placeholder="Input Alamat Anggota" value="{{ old('alamatAnggota') }}" required autofocus>

                                                @error('alamatAnggota')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="pendidikanAnggota" class="form-label"><b>Pendidikan Anggota</b></label>

                                                <input type="text" class="form-control @error('pendidikanAnggota') is-invalid @enderror" name="pendidikanAnggota" id="pendidikanAnggota" placeholder="Input Alamat Anggota" value="{{ old('pendidikanAnggota') }}" required autofocus>

                                                @error('pendidikanAnggota')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="pekerjaanAnggota" class="form-label"><b>Pekerjaan Anggota</b></label>

                                                <input type="text" class="form-control @error('pekerjaanAnggota') is-invalid @enderror" name="pekerjaanAnggota" id="pekerjaanAnggota" placeholder="Input Alamat Anggota" value="{{ old('pekerjaanAnggota') }}" required autofocus>

                                                @error('pekerjaanAnggota')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="jabatan_id" class="form-label"><b>Jabatan Anggota</b></label>

                                                <select class="form-select mt-2" name="jabatan_id" id="jabatan_id">
                                                    <option selected>Select Menu</option>
                                                    @foreach ($jabatan->skip(1) as $jbt)
                                                        <option value="{{ $jbt->id }}">{{ $jbt->posisiJabatan }}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Created</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-4" style="margin-left: 40px">
                        
                        <table class="table" style="text-align: left; color: black">
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Jabatan</th>
                                <th style="text-align: center">Action</th>
                            </tr>
    
                            <tr style="width: 100%">
                                <td style="vertical-align: middle; width: 5%; ">1</td>
                                <td style="vertical-align: middle;  ">{{ $anggota[0]->namaAnggota }}</td>
                                {{-- <td style="vertical-align: middle; width: 30%; ">{{ $item->lembaga->singkatanLembaga}}</td> --}}
                                <td style="vertical-align: middle; text-transform: uppercase ">{{ $anggota[0]->jabatan->posisiJabatan }}</td>
                                <td style="text-align: center;  ">
                                    <button class="btn btn-warning"style="width: 100px" data-bs-toggle="modal" data-bs-target="#modalEditAnggota">Edit</button>
                                </td>
                                <!-- Modal edit-->
                                <div class="modal fade" id="modalEditAnggota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditAnggotaLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalEditAnggotaLabel">Edit Anggota</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/anggotas/{{ $anggota[0]->id }}" method="post" enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <div class="modal-body">
                                                    <script>
                                                        function imgPreviewAnggota(){
                                                            // tangkap variabel image dengan id image
                                                            const fotoAnggota = document.querySelector('#fotoAnggota');

                                                            // ambil tag img kosong untuk preview
                                                            const imgPreview = document.querySelector('.img-previewAnggota');

                                                            // menangkap gambarnya dari url
                                                            const oFReader = new FileReader();
                                                            oFReader.readAsDataURL(fotoAnggota.files[0]);

                                                            
                                                            oFReader.onload = function(oFREvent){
                                                            imgPreview.src = oFREvent.target.result;
                                                            }
                                                        }
                                                    </script>
                                                    <div class="mb-2" style="width: 100px; height: 130px; background-color: grey">
                                                        @if ($anggota[0]->fotoAnggota)
                                                            <img class="img-previewAnggota" style="width: 100px; height: 130px;" src="{{ asset('storage/' . $anggota[0]->fotoAnggota) }}">
                                                        @else
                                                            <img class="img-previewAnggota" style="width: 100px; height: 130px;">
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="mb-3">

                                                        <input type="hidden" name="oldFotoAnggota" value="{{ $anggota[0]->fotoAnggota }}">

                                                        <label for="fotoAnggota" class="form-label" style="font-weight: bold">Logo Lembaga</label>

                                                        <input class="form-control @error('fotoAnggota') is-invalid @enderror" type="file" id="fotoAnggota" name="fotoAnggota" onchange="imgPreviewAnggota()">
                                                        @error('fotoAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror

                                                        
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="namaAnggota" class="form-label"><b>Nama Anggota</b></label>

                                                        <input type="text" class="form-control @error('namaAnggota') is-invalid @enderror" name="namaAnggota" id="namaAnggota" placeholder="Input Nama Anggota" value="{{ old('namaAnggota', $anggota[0]->namaAnggota) }}" required autofocus>

                                                        @error('namaAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="alamatAnggota" class="form-label"><b>Alamat Anggota</b></label>

                                                        <input type="text" class="form-control @error('alamatAnggota') is-invalid @enderror" name="alamatAnggota" id="alamatAnggota" placeholder="Input Alamat Anggota" value="{{ old('alamatAnggota', $anggota[0]->alamatAnggota) }}" required autofocus>

                                                        @error('alamatAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="pendidikanAnggota" class="form-label"><b>Pendidikan Anggota</b></label>

                                                        <input type="text" class="form-control @error('pendidikanAnggota') is-invalid @enderror" name="pendidikanAnggota" id="pendidikanAnggota" placeholder="Input Alamat Anggota" value="{{ old('pendidikanAnggota', $anggota[0]->pendidikanAnggota) }}" required autofocus>

                                                        @error('pendidikanAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="pekerjaanAnggota" class="form-label"><b>Pekerjaan Anggota</b></label>

                                                        <input type="text" class="form-control @error('pekerjaanAnggota') is-invalid @enderror" name="pekerjaanAnggota" id="pekerjaanAnggota" placeholder="Input Alamat Anggota" value="{{ old('pekerjaanAnggota', $anggota[0]->pekerjaanAnggota) }}" required autofocus>

                                                        @error('pekerjaanAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="jabatan_id" class="form-label"><b>Jabatan Anggota</b></label>

                                                        <input type="hidden" name="jabatan_id" id="jabatan_id" value="{{ $anggota[0]->jabatan_id }}">
                                                        <input type="text" class="form-control" value="{{ $anggota[0]->jabatan->posisiJabatan }}"  readonly disabled>
                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Updated</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php $i = 2; ?>
                            @foreach ($anggota->skip(1) as $agt) 
                                <tr style="width: 100%">
                                    <td style="vertical-align: middle; width: 5%; ">{{ $i++ }}</td>
                                    <td style="vertical-align: middle;  ">{{ $agt->namaAnggota }}</td>
                                    {{-- <td style="vertical-align: middle; width: 30%; ">{{ $agt->lembaga->singkatanLembaga}}</td> --}}
                                    <td style="vertical-align: middle; text-transform: uppercase ">{{ $agt->jabatan->posisiJabatan }}</td>
                                    <td style="text-align: center;  ">
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditAnggota{{ $agt->id }}">Edit</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#dropAnggota{{ $agt->id }}">Hapus</button>
                                    </td>
                                </tr>
        
                                <!-- Modal delete-->
                                <div class="modal fade" id="dropAnggota{{ $agt->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dropAnggotaLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="dropAnggotaLabel">Delete {{ $agt->namaAnggota }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin untuk menghapus data {{ $agt->namaAnggota }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                                <form action="/anggotas/{{ $agt->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Deleted</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Modal edit-->
                                <div class="modal fade" id="modalEditAnggota{{ $agt->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditAnggotaLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalEditAnggotaLabel">Edit Anggota</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/anggotas/{{ $agt->id }}" method="post" enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <div class="modal-body">
                                                    
                                                    <script>
                                                        function imgPreviewAgt(){
                                                            // tangkap variabel image dengan id image
                                                            const fotoAgt = document.querySelector('#fotoAgt');

                                                            // ambil tag img kosong untuk preview
                                                            const imgPreview = document.querySelector('.img-previewAgt');

                                                            // menangkap gambarnya dari url
                                                            const oFReader = new FileReader();
                                                            oFReader.readAsDataURL(fotoAgt.files[0]);

                                                            
                                                            oFReader.onload = function(oFREvent){
                                                            imgPreview.src = oFREvent.target.result;
                                                            }
                                                        }
                                                    </script>
                                                    <div class="mb-2" style="width: 100px; height: 130px; background-color: grey">
                                                        @if ($agt->fotoAnggota)
                                                            <img class="img-previewAgt" style="width: 100px; height: 130px;" src="{{ asset('storage/' . $agt->fotoAnggota) }}">
                                                        @else
                                                            <img class="img-previewAgt" style="width: 100px; height: 130px;">
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="mb-3">

                                                        <input type="hidden" name="oldFotoAnggota" value="{{ $agt->fotoAnggota }}">

                                                        <label for="fotoAnggota" class="form-label" style="font-weight: bold">Logo Lembaga</label>

                                                        <input class="form-control @error('fotoAgt') is-invalid @enderror" type="file" id="fotoAgt" name="fotoAnggota" onchange="imgPreviewAgt()">
                                                        @error('fotoAgt')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror

                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="namaAnggota" class="form-label"><b>Nama Anggota</b></label>

                                                        <input type="text" class="form-control @error('namaAnggota') is-invalid @enderror" name="namaAnggota" id="namaAnggota" placeholder="Input Nama Anggota" value="{{ old('namaAnggota', $agt->namaAnggota) }}" required autofocus>

                                                        @error('namaAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="alamatAnggota" class="form-label"><b>Alamat Anggota</b></label>

                                                        <input type="text" class="form-control @error('alamatAnggota') is-invalid @enderror" name="alamatAnggota" id="alamatAnggota" placeholder="Input Alamat Anggota" value="{{ old('alamatAnggota', $agt->alamatAnggota) }}" required autofocus>

                                                        @error('alamatAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="pendidikanAnggota" class="form-label"><b>Pendidikan Anggota</b></label>

                                                        <input type="text" class="form-control @error('pendidikanAnggota') is-invalid @enderror" name="pendidikanAnggota" id="pendidikanAnggota" placeholder="Input Alamat Anggota" value="{{ old('pendidikanAnggota', $agt->pendidikanAnggota) }}" required autofocus>

                                                        @error('pendidikanAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="pekerjaanAnggota" class="form-label"><b>Pekerjaan Anggota</b></label>

                                                        <input type="text" class="form-control @error('pekerjaanAnggota') is-invalid @enderror" name="pekerjaanAnggota" id="pekerjaanAnggota" placeholder="Input Alamat Anggota" value="{{ old('pekerjaanAnggota', $agt->pekerjaanAnggota) }}" required autofocus>

                                                        @error('pekerjaanAnggota')
                                                            <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="jabatan_id" class="form-label"><b>Jabatan Anggota</b></label>

                                                        <select class="form-select mt-2" name="jabatan_id" id="jabatan_id">
                                                            
                                                            <option value="{{ $agt->jabatan_id }}">{{ $agt->jabatan->posisiJabatan }} </option>

                                                            @foreach ($jabatan as $jbt)
                                                                <option value="{{ $jbt->id }}">{{ $jbt->posisiJabatan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Updated</button>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div id="kegiatanLembaga" class="mb-5">
                
                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Kegiatan Kelembagaan</h5>
                </div>
                <div class="py-3">
                    <a class="btn btn-primary" href="/lembaga/kegiatan/{{ $lembaga->id }}">Tambah Data Kegiatan </a>
                </div>
                <div class="row py-4" style="margin-left: 40px">
                    
                    <table class="table" style="text-align: left; color: black">
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Penyelenggara</th>
                            <th>Last Created</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        @foreach ($kegiatan as $item) 
                            <tr style="width: 100%">
                                <td style="vertical-align: middle; width: 5%; ">{{ $loop->iteration }}</td>
                                <td style="vertical-align: middle;  ">{{ $item->title }}</td>
                                {{-- <td style="vertical-align: middle; width: 30%; ">{{ $item->lembaga->singkatanLembaga}}</td> --}}
                                <td style="vertical-align: middle; text-transform: uppercase ">
                                    @if ($item->lembaga_id === null)
                                        Umum
                                    @else
                                        {{ $item->lembaga->singkatan}}
                                    @endif
                                </td>
                                {{-- <td style="vertical-align: middle;  ">{{ $item->created_at->diffForHumans()}}</td> --}}
                                <td style="vertical-align: middle;  ">{{ $item->created_at->diffForHumans()}}</td>
                                <td style="text-align: center;  ">
                                    <a class="btn btn-warning" href="/lembaga/kegiatan/edit/{{ $item->id }}">Edit</a>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Hapus</button>
                                </td>
                            </tr>
    
                            <!-- Modal delete-->
                            <div class="modal fade" id="staticBackdrop{{ $item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete {{ $item->title }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin untuk menghapus kegiatan {{ $item->title }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                            <form action="/lembaga/kegiatan/delete/{{ $item->id }}" >
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Deleted</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        @endforeach
                    </table>
            
                   
                </div>
            </div>
        </div>
    </main>
@endsection