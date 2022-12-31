@extends('../layout/mainAdmin')

@section('adminContent')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><b>{{ $title }}</b></h1>
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
        <div class="row">
            @if (session()->has('loginSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('loginSuccess') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif
                <style>
                    .mainMenu:hover{
                        background-color: gainsboro 
                    }
                    
                </style>
            @can('admin')
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid green">
                        <a href="user" style="text-decoration: none; color: black">
                            <div class="d-flex">
                                <div style="width: 12rem">
                                    <h6 style="color: green">Jumlah Acount</h6>
                                    <h4>{{ $jumlahAcount }} Acount</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="mainIcon bi bi-person-badge"></span></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid #1746a2">
                        <a href="perdesa" style="text-decoration: none; color: black">
                            <div class="d-flex">
                                <div style="width: 12rem">
                                    <h6 style="color: #1746a2">Jumlah PERDES</h6>
                                    <h4>{{ $jumlahPerdes }} PERDES</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-file-earmark-text"></span></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid #54b435">
                        <a href="kegiatan" style="text-decoration: none; color: black">
                            <div class="d-flex">
                                <div style="width: 12rem">
                                    <h6 style="color: #54b435">Jumlah Kegiatan</h6>
                                    <h4>{{ $jumlahKegiatan }} Kegiatan</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-activity"></span></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid #47B5FF">
                        <a href="musyawarah" style="text-decoration: none; color: black">
                            <div class="d-flex">
                                <div style="width: 12rem">
                                    <h6 style="color: #47B5FF">Jumlah Musyawarah</h6>
                                    <h4>{{ $jumlahMusyawarah }} Musyawarah</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-grid-1x2"></span></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid #FFB200">
                        <a href="lembaga" style="text-decoration: none; color: black">
                            <div class="d-flex">
                                <div style="width: 12rem">
                                    <h6 style="color: #FFB200">Jumlah Lembaga</h6>
                                    <h4>{{ $jumlahLembaga }} Lembaga</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-diagram-3"></span></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid indigo">
                        <a href="masyarakat" style="text-decoration: none; color: black">
                            <div class="d-flex">
                                <div style="width: 12rem">
                                    <h6 style="color: indigo">Data Masyarakat</h6>
                                    <h4>{{ $jumlahMasyarakat }} Masyarakat</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-people"></span></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid red">
                        <a href="pengaduan" style="text-decoration: none; color: black">
                            <div class="d-flex">
                                <div style="width: 12rem">
                                    <h6 style="color: red">Pengaduan</h6>
                                    <h4>{{ $jumlahPengaduan }} Pengaduan</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-exclamation-circle"></span></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endcan

            @can('lembaga')
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid green">
                        <div class="d-flex">
                            <a href="/myAcount" class="d-flex" style="text-decoration: none">
                                <div style="width: 12rem; ">
                                    <h4 style="color: green; margin-top: 13px">My Acount</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-person-badge"></span></h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid #FFB200">
                        <div class="d-flex">
                            <a href="/lembaga/{{ $user->lembaga_id }}" class="d-flex" style="text-decoration: none">
                                <div style="width: 12rem; ">
                                    <h4 style="color: #FFB200; margin-top: 13px">Detail Lembaga</h4>
                                </div>
                                <div style="width: 4rem; ">
                                    <h1><span style="color: black; vertical-align: middle"  class="bi bi-diagram-3"></span></h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endcan
        </div>

        <div class="mb-3 border-bottom mt-4">
            <h5><b>Pengajuan Surat</b></h5>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid Orange">
                    <div class="d-flex">
                        <div style="width: 12rem">
                            <h6 style="color: Orange">Status : Pengajuan</h6>
                            <h4>{{ $jumlahAcount }} Surat</h4>
                        </div>
                        <div style="width: 4rem; ">
                            <h1><span style="color: black; vertical-align: middle"  class="bi bi-envelope-paper"></span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid blue">
                    <div class="d-flex">
                        <div style="width: 12rem">
                            <h6 style="color: blue">Status : Diproses</h6>
                            <h4>{{ $jumlahPerdes }} Surat</h4>
                        </div>
                        <div style="width: 4rem; ">
                            <h1><span style="color: black; vertical-align: middle"  class="bi bi-clock-history"></span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-inline-flex mainMenu" style="width: 16rem; padding: 12px;  border-left: 5px solid green">
                    <div class="d-flex">
                        <div style="width: 12rem">
                            <h6 style="color: green">Status : Selesai</h6>
                            <h4>{{ $jumlahKegiatan }} Surat</h4>
                        </div>
                        <div style="width: 4rem; ">
                            <h1><span style="color: black; vertical-align: middle"  class="bi bi-check-circle"></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection