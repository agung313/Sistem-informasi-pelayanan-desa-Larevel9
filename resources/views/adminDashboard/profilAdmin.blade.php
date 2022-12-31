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
            @if (session()->has('successUpdatedPost'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedPost') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successCreateDemografi'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successCreateDemografi') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedDemografi'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedDemografi') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successUpdatedDemografi'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedDemografi') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successUpdatedVisiMisi'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedVisiMisi') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            <div>
                <a href="/profilDesa/{{ $profil->id }}/edit" class="btn btn-primary">Update Profil Desa</a>
            </div>
            <div class="d-inline-block " style="text-align: center">
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
                        <td style="width: 85%">: {{ $profil->jumlshJiwa }} Jiwa</td>
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

                

                <div id="demografi" class="mb-5">
                    <div style="background-color: #006029; color: whitesmoke; width: 100%">
                        <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Demografi</h5>
                    </div>
                    
                    <!-- Button trigger modal -->
                    <div class="py-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Tambah Data Demografi
                        </button>
                        
                    
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Demografi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/demografi" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="d-block mb-3">
                                                <label for="titleDemografi" class="form-label" style="font-weight: bold">Title Demografi</label>
                            
                                                <input type="text" class="form-control @error('titleDemografi') is-invalid @enderror" id="titleDemografi" name="titleDemografi" placeholder="Input Title Demografu" autofocus required value="{{ old('titleDemografi')}}">
                                                @error('titleDemografi')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="d-block">
                                                <label for="isiTitleDemografi" class="form-label" style="font-weight: bold">Isi Title Demografi</label>
                            
                                                <input type="text" class="form-control @error('isiTitleDemografi') is-invalid @enderror" id="isiTitleDemografi" name="isiTitleDemografi" placeholder="Input Demografi" autofocus required value="{{ old('isiTitleDemografi')}}">
                                                @error('isiTitleDemografi')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
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
                    <div style="text-align: justify; margin-top: 10px">
                        <table class="table">
                                @foreach ($demografis as $demografi)
                                    <tr>
                                        <td><b>{{ $demografi->titleDemografi }}</b></td>
                                        <td>: {!! $demografi->isiTitleDemografi !!}</td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackEdit{{ $demografi->id }}">Edit</button>
                                            <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $demografi->id }}">Hapus</button> 
                                        </td>
                                    </tr>
                                    <!-- Modal delete-->
                                    <div class="modal fade" id="staticBackdrop{{ $demografi->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete {{ $demografi->titleDemografi }}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin untuk menghapus data {{ $demografi->titleDemografi }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                                    <form action="/demografi/{{ $demografi->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Deleted</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Modal edit --}}
                                    <div class="modal fade" id="staticBackEdit{{ $demografi->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackEditLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackEditLabel">Edit Data Demografi</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="/demografi/{{ $demografi->id }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="d-block mb-3">
                                                            <label for="titleDemografi" class="form-label" style="font-weight: bold">Title Demografi</label>
                                        
                                                            <input type="text" class="form-control @error('titleDemografi') is-invalid @enderror" id="titleDemografi" name="titleDemografi" placeholder="Input your title demografi" autofocus required value="{{ old('titleDemografi', $demografi->titleDemografi)}}">
                                                            @error('titleDemografi')
                                                                <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="d-block">
                                                            <label for="isiTitleDemografi" class="form-label" style="font-weight: bold">Isi Title Demografi</label>
                                        
                                                            <input type="text" class="form-control @error('isiTitleDemografi') is-invalid @enderror" id="isiTitleDemografi" name="isiTitleDemografi" placeholder="Input your Name Village post" autofocus required value="{{ old('isiTitleDemografi', $demografi->isiTitleDemografi)}}">
                                                            @error('isiTitleDemografi')
                                                                <div class="invalid-feedback">
                                                                <p style="text-align: left">{{ $message }}</p>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">cancel</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
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
        </div>
    </main>
@endsection