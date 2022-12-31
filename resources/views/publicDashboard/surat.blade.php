@extends('../layout/mainPublic')

@section('publicContent')
<div class="container-fluid py-5 px-4">
 

    <div style="float: left ">
        <!-- Button trigger modal -->
        <h1 type="button" class="helpInformation bi bi-question-circle-fill btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal"
        style="position: sticky; font-size: 40px;"></h1>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title fs-5 d-inline-flex" id="exampleModalLabel">
                        <p><img src="{{ asset('storage/'. $profil->logoDesa) }}" alt="" height="30px"></p>
                        <p style="font-size: 15px; margin-left: 5px; margin-top: 7px"><b>{{ $other->fullTitle }} {{ $profil->namaDesa }}</b></p>
                    </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: justify">
                    <p></p>
                    
                </div>
                <div class="modal-footer">
                    <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="px-3" style="text-align: center">
        <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Pelayanan Pengajuan Surat {{ $profil->namaDesa }}</h3>
        <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
        
        <div class="row" style="text-align: justify; padding: 10px">
            <div class="card" style="width: 1300px; min-height: 500px; background-color: whitesmoke; padding: 10px">
                <div class="card" style="width: 100%; height: 100%; background-color: white; padding: 20px">
                    @if (session()->has('successCreatePengaduan'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('successCreatePengaduan') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> 
                    @endif

                    <div class="py-4">
                        <div class="mb-4" style="text-align: center;">
                            <img src="{{ asset('storage/'. $profil->logoDesa) }}" width="100px" >
                            <h5 style="font-family: 'Raleway', sans-serif; margin-top: 10px; text-transform: uppercase">{{ $profil->namaDesa }}</h5>
                        </div>

                        <div class="mb-4 p-2">
                            <div id="pengajuanSurat" class="mb-5">
                                <div style="background-color: #006029; color: whitesmoke; width: 100%">
                                    <h5 class="py-2" style="font-family: 'Raleway', sans-serif; text-align: center;">Pengajuan Surat yang Dapat Dilakukan</h5>
                                </div>
                                <div style="width: 100%; text-align: left; margin-bottom: 25px; margin-top: 20px; border-bottom: 1px solid rgb(156, 156, 156)" class="d-inline-flex">
                                    <div style="width: 50%; font-family: 'Raleway', sans-serif; ">
                                        <p style="text-transform: capitalize">Surat domisili</p>
                                    </div>
                                    <div style="width: 50%">
                                        <p style="font-family: 'Raleway', sans-serif;">Syarat Pengajuan :</p>
                                        <p>a. Penyelenggaraan pemerintahan desa</p>
                                        <p>b. Pelaksanaan pembangunan</p>
                                        <p>c. Pembinaan kemasyarakatan</p>
                                        <p>d. Pemberdayaan masyarakat</p>
                                        <p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection