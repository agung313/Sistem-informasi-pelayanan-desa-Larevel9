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
            @if (session()->has('successUpdatedPerdesa'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedPerdesa') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successCreatePerdesa'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successCreatePerdesa') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedPerdesa'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedPerdesa') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif


            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticCreatedPerdes">Tambah Data PERRDES</button>
                {{-- Modal perdes --}}
                <div class="modal fade" id="staticCreatedPerdes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticCreatedPerdesLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticCreatedPerdesLabel">Tambah Data PERDES</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/perdesa" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="d-block mb-3">
                                        <label for="titlePerdes" class="form-label" style="font-weight: bold">Title PERDES</label>
                    
                                        <input type="text" class="form-control @error('titlePerdes') is-invalid @enderror" id="titlePerdes" name="titlePerdes" placeholder="Input Title Perdes" autofocus required value="{{ old('titlePerdes')}}">
                                        @error('titlePerdes')
                                            <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="d-block mb-3">
                                        <label for="tanggalPerdes_at" class="form-label" style="font-weight: bold">Tanggal Penerbitan PERDES</label>
                    
                                        <input type="date" class="form-control @error('tanggalPerdes_at') is-invalid @enderror" id="tanggalPerdes_at" name="tanggalPerdes_at" placeholder="Input your Name Village post" autofocus required value="{{ old('tanggalPerdes_at')}}">
                                        @error('tanggalPerdes_at')
                                            <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="d-block">
                                        <label for="filePerdes" class="form-label" style="font-weight: bold">File PERDES (.pdf)</label>

                                        <input class="form-control @error('filePerdes') is-invalid @enderror" type="file" id="filePerdes" name="filePerdes" autofocus required>
                                        @error('filePerdes')
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

            <div class="py-4">
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <th>No</th>
                        <th>Nama PERDES</th>
                        <th>Tanggal Penerbitan</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    @foreach ($perdesa as $item) 
                        <tr style="width: 100%">
                            <td style="vertical-align: middle; width: 5%; ">{{ $loop->iteration }}</td>
                            <td style="vertical-align: middle; width: 40%; ">{{ $item->titlePerdes }}</td>
                            <td style="vertical-align: middle; width: 25%; ">{{ \Carbon\Carbon::parse($item->tanggalPerdes_at)->format('d F Y')}}</td>
                            <td style="text-align: center; width: 30%; ">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#perdesModal{{ $item->id }}">Read More</button>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticEditPerdes{{ $item->id }}">Edit</button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Hapus</button>
                            </td>
                        </tr>
                        <!-- Modal delete-->
                        <div class="modal fade" id="staticBackdrop{{ $item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete {{ $item->titlePerdes }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin untuk menghapus data {{ $item->titlePerdes }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                        <form action="/perdesa/{{ $item->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Deleted</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- modal edit --}}
                        <div class="modal fade" id="staticEditPerdes{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticEditPerdesLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticEditPerdesLabel">Edit {{ $item->titlePerdes }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/perdesa/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="d-block mb-3">
                                                <label for="titlePerdes" class="form-label" style="font-weight: bold">Title PERDES</label>
                            
                                                <input type="text" class="form-control @error('titlePerdes') is-invalid @enderror" id="titlePerdes" name="titlePerdes" placeholder="Input Title Perdes" autofocus required value="{{ old('titlePerdes', $item->titlePerdes)}}">
                                                @error('titlePerdes')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="d-block mb-3">
                                                <label for="tanggalPerdes_at" class="form-label" style="font-weight: bold">Tanggal Penerbitan PERDES</label>
                            
                                                <input type="date" class="form-control @error('tanggalPerdes_at') is-invalid @enderror" id="tanggalPerdes_at" name="tanggalPerdes_at" placeholder="Input your Name Village post" autofocus required value="{{ old('tanggalPerdes_at', $item->tanggalPerdes_at)}}">
                                                @error('tanggalPerdes_at')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="d-block">
                                                <label for="filePerdes" class="form-label" style="font-weight: bold">New File PERDES (.pdf .doc)</label>
                                                
                                                <input type="hidden" name="oldPerdes" value="{{ $item->filePerdes }}">

                                                <input class="form-control @error('filePerdes') is-invalid @enderror" type="file" id="filePerdes"
                                                    name="filePerdes">
                                                @error('filePerdes')
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

                        {{-- modal read --}}
                        <div class="modal fade" id="perdesModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="width: 550px; height: 700px">
                                    <iframe src="{{ asset('storage/' . $item->filePerdes) }}" frameborder="0" width="100%" height="100%"></iframe>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </table>
            </div>

        </div>
    </main>
@endsection