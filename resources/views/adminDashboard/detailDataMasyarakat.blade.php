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
            
            <div class="d-inline-block " style="text-align: center">
                <img src="{{ asset('storage/'. $profil->logoDesa) }}" class="img-fluid rounded-start" alt="..." style="width: 150px">
                <h5 style="font-family: 'Raleway', sans-serif; margin-top: 15px">{{ $profil->namaDesa }}</h5>
            </div>

            <div class="py-4">
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <td style="width: 35%; font-weight: bold"><h5><b>Jumlah Data Masyarakat</b></h5></td>
                        <td style="width: 65%"><h5><b>: {{ $masyarakat->count() }} Orang</b></h5></td>
                    </tr>
                    <tr>
                        <td style="width: 35%; font-weight: bold"><h5><b>Rata - Rata Penghasilan Masyarakat</b></h5></td>
                        
                        <td style="width: 65%"><h5><b>: Rp. {{ $masyarakat->avg('penghasilan') }} </b></h5></td>
                    </tr>
                    
                    
                    
                </table>

                <div class="mt-5 mb-3" style="background-color: #006029; color: whitesmoke; width: 100%">
                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Rentang Usia Masyarakat</h6>
                </div>
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <td style="width: 20%;">Balita (0 - 5 Tahun) </td>
                        <td style="width: 80%">: {{ $masyarakat->where('rentangUmur', 'balita')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Anak - Anak (5 - 11 Tahun) </td>
                        <td style="width: 80%">: {{ $masyarakat->where('rentangUmur', 'anak - anak')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Remaja (12 - 25 Tahun) </td>
                        <td style="width: 80%">: {{ $masyarakat->where('rentangUmur', 'remaja')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Dewasa (26 - 45 Tahun) </td>
                        <td style="width: 80%">: {{ $masyarakat->where('rentangUmur', 'dewasa')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Lansia (46 - 65 Tahun) </td>
                        <td style="width: 80%">: {{ $masyarakat->where('rentangUmur', 'lansia')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Usia Lanjut (65 Keatas) </td>
                        <td style="width: 80%">: {{ $masyarakat->where('rentangUmur', 'usia lanjut')->count() }} Orang</td>
                    </tr>
                </table>

                <div class="mt-5 mb-3" style="background-color: #006029; color: whitesmoke; width: 100%">
                    <h6 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Jumlah Penduduk Setiap Pelita</h6>
                </div>
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 1</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 1')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 2</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 2')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 3</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 3')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 4</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 4')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 5</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 5')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 6</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 6')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 7</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 7')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 8</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 8')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 9</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 9')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 10</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 10')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 11</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 11')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 12</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 12')->count() }} Orang</td>
                    </tr>
                    <tr>
                        <td style="width: 20%;">Jumlah Penduduk Pelita 13</td>
                        <td style="width: 80%">: {{ $masyarakat->where('alamat', 'Pelita 13')->count() }} Orang</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
@endsection