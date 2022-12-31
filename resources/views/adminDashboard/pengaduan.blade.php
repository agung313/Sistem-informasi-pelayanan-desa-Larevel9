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
            @if (session()->has('successUpdatedPengaduan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedPengaduan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedPengaduan'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedPengaduan') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif


            <div class="py-4">
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <th>No</th>
                        <th>Title Pengaduan</th>
                        <th>Tempat Kejadian</th>
                        <th>Last Created</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    @foreach ($pengaduan as $item) 
                        <tr style="width: 100%">
                            <td style="vertical-align: middle; width: 5%; ">{{ $loop->iteration }}</td>
                            <td style="vertical-align: middle; width:45%; text-transform: capitalize">{{ $item->title }}</td>
                            {{-- <td style="vertical-align: middle; width: 30%; ">{{ $item->lembaga->singkatanLembaga}}</td> --}}
                            <td style="vertical-align: middle; text-transform: capitalize ">{{ $item->tempatKejadian }}</td>
                            {{-- <td style="vertical-align: middle;  ">{{ $item->created_at->diffForHumans()}}</td> --}}
                            <td style="vertical-align: middle;  ">{{ $item->created_at->diffForHumans()}}</td>
                            <td style="text-align: center;  ">
                                <a href="/pengaduan/{{ $item->id }}" class="btn btn-success">View</a>
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
                                        <p>Apakah anda yakin untuk menghapus pengaduan <b>{{ $item->title }}</b></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                        <form action="/pengaduan/{{ $item->id }}" method="post">
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
                <div class="d-flex justify-content-between mb-3" >
                    {{ $pengaduan->links('layout.pagination') }}
                </div>
            </div>

        </div>
    </main>
@endsection