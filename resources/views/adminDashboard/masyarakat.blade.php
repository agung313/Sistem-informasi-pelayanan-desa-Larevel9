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
            @if (session()->has('successUpdatedMasyarakat'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedMasyarakat') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successCreatedMasyarakat'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successCreatedMasyarakat') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successImportData'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successImportData') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedMasyarakat'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedMasyarakat') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('successDeletedAllData'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('successDeletedAllData') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif


            <div>
                <div class="d-flex">

                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cretaeDataMasyarakat" style="margin-right: 15px">Tambah Data Masyarakat</button>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importExcel" style="margin-right: 15px">Import Data Excel</button>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exportExcel" style="margin-right: 15px">Export Data Excel</button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAllData" style="margin-right: 15px">Hapus Seluruh Data</button>
                    <a href="/detailDataMasyarakat" class="btn btn-info" style="margin-right: 15px">Detail Data </a>
                </div>

                <!-- Modal create-->
                <div class="modal fade" id="cretaeDataMasyarakat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cretaeDataMasyarakatLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="cretaeDataMasyarakatLabel">Tambah Data Masyarakat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/masyarakat" method="post">
                                @csrf
                            
                                <div class="modal-body">
                                    
                                    <div class="mb-3">
                                        <label for="nama" class="form-label"><b>Nama Masyarakat</b></label>

                                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" required value="{{ old('nama') }}" autocomplete="off" placeholder="Input Nama Masyarakat">

                                        @error('nama')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="nik" class="form-label"><b>NIK Masyarakat</b></label>

                                        <input type="text" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" required value="{{ old('nik') }}" autocomplete="off" placeholder="Input NIK Masyarakat">

                                        @error('nik')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="rentangUmur" class="form-label"><b>Rentang Umur Masyarakat</b></label>

                                        <select class="form-select" name="rentangUmur" id="rentangUmur">
                                            <option value="" selected>Silakan Pilih Rentang Umur</option>
                                            <option value="balita">0 - 5 Tahun (Balita)</option>
                                            <option value="anak - anak">5 - 11 Tahun (Anak - Anak)</option>
                                            <option value="remaja">12 - 25 Tahun (Remaja)</option>
                                            <option value="dewasa">26 - 45 Tahun (Dewasa)</option>
                                            <option value="lansia">46 - 65 Tahun (Lansia)</option>
                                            <option value="usia lanjut">65 Keatas (Usia Lanjut)</option>
                                            
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label"><b>Alamat Masyarakat</b></label>

                                        <select class="form-select" name="alamat" id="alamat">
                                            <option value="" selected>Silakan Pilih Alamat</option>
                                            <option value="Pelita 1">Pelita 1</option>
                                            <option value="Pelita 2">Pelita 2</option>
                                            <option value="Pelita 3">Pelita 3</option>
                                            <option value="Pelita 4">Pelita 4</option>
                                            <option value="Pelita 5">Pelita 5</option>
                                            <option value="Pelita 6">Pelita 6</option>
                                            <option value="Pelita 7">Pelita 7</option>
                                            <option value="Pelita 8">Pelita 8</option>
                                            <option value="Pelita 9">Pelita 9</option>
                                            <option value="Pelita 10">Pelita 10</option>
                                            <option value="Pelita 11">Pelita 11</option>
                                            <option value="Pelita 12">Pelita 12</option>
                                            <option value="Pelita 13">Pelita 13</option>
                                            
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="penghasilan" class="form-label"><b>Penghasilan Masyarakat</b></label>

                                        <input type="text" name="penghasilan" id="penghasilan" class="form-control @error('penghasilan') is-invalid @enderror" required value="{{ old('penghasilan') }}" autocomplete="off" placeholder="Input penghasilan Masyarakat (2.000.000)">

                                        @error('penghasilan')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
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

                <!-- Modal import-->
                <div class="modal fade" id="importExcel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="importExcelLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="importExcelLabel">Import Data Masyarakat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/masyarakatImport" method="post" enctype="multipart/form-data">
                                @csrf
                            
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="dataMasyarakat" class="form-label"><b>Data Masyarakat</b></label>
                                        <p class="text-muted" style="font-size: 11px; margin-top: -8px;">Data harus berupa excel, Silakan lihat contoh data berikut <a href="DataMasyarakat/Example/DataMasyrakat.xlsx" download>Data Excel</a></p>
                                        <input type="file" name="dataMasyarakat" id="dataMasyarakat" class="form-control" required>
                                    </div>
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal delete all-->
                <div class="modal fade" id="deleteAllData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteAllDataLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="deleteAllDataLabel">Hapus Seluruh Data Masyarakat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <p><b>Apakah anda yakin untuk menghapus seluruh data masyarakat? pastikan anda telah meng-export data untuk menanggulangi kesalahan</b></p>
                                </div>
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                <a href="deleteAllMasyarakat"><button type="submit" class="btn btn-primary">Delete</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal export excel-->
                <div class="modal fade" id="exportExcel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exportExcelLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exportExcelLabel">Export Seluruh Data Masyarakat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <p><b>Apakah anda yakin untuk meng-export seluruh data masyarakat? pastikan data telah benar untuk menanggulangi kesalahan</b></p>
                                </div>
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                <a href="masyarakatImport"><button class="btn btn-primary">Export</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-4">
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Rentang Umur</th>
                        <th>Alamat</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    @foreach ($masyarakat as $index => $item) 
                        <tr style="width: 100%">
                            <td style="vertical-align: middle; width: 5%; ">{{ $index + $masyarakat->firstItem() }}</td>
                            <td style="vertical-align: middle;  ">{{ $item->nama }}</td>
                            <td style="vertical-align: middle;  ">{{ $item->nik }}</td>
                            <td style="vertical-align: middle; text-transform: capitalize ">{{ $item->rentangUmur }}</td>
                            <td style="vertical-align: middle;  ">{{ $item->alamat }}</td>
                            <td style="text-align: center;  ">
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editDataMasyarakat{{ $item->id }}">Edit</button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">Hapus</button>
                                
                            </td>
                        </tr>

                        <!-- Modal delete-->
                        <div class="modal fade" id="staticBackdrop{{ $item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Data Masyarakat</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin untuk menghapus data <b>{{ $item->nama }}</b></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                        <form action="/masyarakat/{{ $item->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Deleted</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal edit-->
                        <div class="modal fade" id="editDataMasyarakat{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editDataMasyarakatLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editDataMasyarakatLabel">Edit Data Masyarakat</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/masyarakat/{{ $item->id }}" method="post">
                                        @method('put')
                                        @csrf
                                    
                                        <div class="modal-body">
                                            
                                            <div class="mb-3">
                                                <label for="nama" class="form-label"><b>Nama Masyarakat</b></label>

                                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" required value="{{ old('nama', $item->nama) }}" autocomplete="off">

                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="nik" class="form-label"><b>NIK Masyarakat</b></label>

                                                <input type="text" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" required value="{{ old('nik', $item->nik) }}" autocomplete="off">

                                                @error('nik')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="rentangUmur" class="form-label"><b>Rentang Umur Masyarakat</b></label>

                                                <select class="form-select" name="rentangUmur" id="rentangUmur">
                                                    <option value="{{ $item->rentangUmur }}" selected >{{ $item->rentangUmur }}</option>
                                                    <option value="balita">0 - 5 Tahun (Balita)</option>
                                                    <option value="anak - anak">5 - 11 Tahun (Anak - Anak)</option>
                                                    <option value="remaja">12 - 25 Tahun (Remaja)</option>
                                                    <option value="dewasa">26 - 45 Tahun (Dewasa)</option>
                                                    <option value="lansia">46 - 65 Tahun (Lansia)</option>
                                                    <option value="usia lanjut">65 Keatas (Usia Lanjut)</option>
                                                </select>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label"><b>Alamat Masyarakat</b></label>

                                                <select class="form-select" name="alamat" id="alamat">
                                                    <option value="{{ $item->alamat }}" selected >{{ $item->alamat }}</option>
                                                    <option value="Pelita 1">Pelita 1</option>
                                                    <option value="Pelita 2">Pelita 2</option>
                                                    <option value="Pelita 3">Pelita 3</option>
                                                    <option value="Pelita 4">Pelita 4</option>
                                                    <option value="Pelita 5">Pelita 5</option>
                                                    <option value="Pelita 6">Pelita 6</option>
                                                    <option value="Pelita 7">Pelita 7</option>
                                                    <option value="Pelita 8">Pelita 8</option>
                                                    <option value="Pelita 9">Pelita 9</option>
                                                    <option value="Pelita 10">Pelita 10</option>
                                                    <option value="Pelita 11">Pelita 11</option>
                                                    <option value="Pelita 12">Pelita 12</option>
                                                    <option value="Pelita 13">Pelita 13</option>
                                                </select>
                                            </div>
                                            

                                            <div class="mb-3">
                                                <label for="penghasilan" class="form-label"><b>Penghasilan Masyarakat</b></label>

                                                <input type="text" name="penghasilan" id="penghasilan" class="form-control @error('penghasilan') is-invalid @enderror" required value="{{ old('penghasilan', $item->penghasilan) }}" autocomplete="off">

                                                @error('penghasilan')
                                                    <div class="invalid-feedback">
                                                        <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </table>
                <div class="d-flex justify-content-between mb-3" >
                    {{ $masyarakat->links('layout.pagination') }}
                </div>
            </div>

        </div>
    </main>
@endsection