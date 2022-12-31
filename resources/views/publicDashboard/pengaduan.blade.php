@extends('../layout/mainPublic')

@section('publicContent')
<div class="container-fluid py-5 px-4">

    <style>
        @media (min-width: 320px) and (max-width: 480px) 
        {

            #normal{
                display: none !important;
            }

            #mobile{
                display: block !important;
            }

        }
    </style>

    <div id="mobile" style="display: none">

        <div style="float: left">
            <button style=" margin-top: -10px; border: 0" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHelp" aria-controls="offcanvasDarkNavbar">
                <h1><span style="color: black; " class="bi bi-question-circle-fill"></span></h1>
            </button>
        </div>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasHelp" aria-labelledby="offcanvasHelpLabel">
            <div class="offcanvas-header" style="border: 0; border-bottom: 1px solid white">
                <div class="d-inline-flex">
                    <img src="{{ asset('storage/'. $profil->logoDesa) }}" alt="Logo" width="40" height="45" class="d-inline-block align-text-top">
                    <div class="d-inline-block">

                        <h5 style="margin-left: 10px; font-family: 'Raleway', sans-serif; color: white; text-transform: uppercase"><b>{{ $other->shortTitle }} {{ $profil->namaDesa }}</b></h5>
                        <p style="margin-left: 10px; font-size: 10px; margin-top: -8px; color: whitesmoke; ">{{ $other->fullTitle }} {{ $profil->namaDesa }}</p>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="color: white; text-align: justify">
                <h5><b>HELP INFORMATION</b></h5><br>
                <p>Pada menu ini masyarakat dapat melakukan pengaduan terhadap berbagai kegiatan atau tindakan yang dianggap merugikan desa dan masyarakat desa</p>
                <p>Silakan isi seluruh form pengaduan yang ada dengan sejujur jujurnya tanpa paksaan dari pihak manapun</p>
            </div>
        </div>

    
        <div  style="text-align: center">
            <h6 class="text-center px-2" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Layanan Pengaduan {{ $profil->namaDesa }}</h6>
            <p style="font-size: 13px; text-align: justify">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            
            <div class="row" style="text-align: justify; padding: 5px">
                <div class="card" style="width: 1300px; min-height: 500px; ">
                    <div style="width: 100%; height: 100%;">
    
                        @if (session()->has('successCreatePengaduan'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('successCreatePengaduan') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> 
                        @endif
    
                        <div class="py-4">
                            <div class="mb-4" style="text-align: center;">
                                <img src="{{ asset('storage/'. $profil->logoDesa) }}" width="100px" >
                                <h6 style="font-family: 'Raleway', sans-serif; margin-top: 10px; text-transform: uppercase">Silakan isi form pengaduan berikut</h6>
                            </div>
                            <div  style="padding: 10px">
                                <form action="/pengaduan/create" method="post" enctype="multipart/form-data">
                                    @csrf
    
                                    <h6 class="mb-3"><b>Foto Pengaduan</b></h6>
                                    <div class="mb-4 d-block" >
                                        
                                        <div class="mb-3" style="background-color: grey; ">
                                            <script>
                                                function imgPreviewPertama(){
                                                    // tangkap variabel image dengan id image
                                                    const fotoFpertama = document.querySelector('#fotoPertama');
        
                                                    // ambil tag img kosong untuk preview
                                                    const imgPreview = document.querySelector('.img-previewPertama');
        
                                                    imgPreview.style.display = 'block';
        
                                                    // menangkap gambarnya dari url
                                                    const oFReader = new FileReader();
                                                    oFReader.readAsDataURL(fotoFpertama.files[0]);
        
                                                    
                                                    oFReader.onload = function(oFREvent){
                                                    imgPreview.src = oFREvent.target.result;
                                                    }
                                                }
                                            </script>
                                            <img class="img-previewPertama" width="100%" height="200px">
                                            
                                            <input type="file" name="fotoPertama" id="fotoPertama" class="form-control @error('fotoPertama') is-invalid @enderror" onchange="imgPreviewPertama()">
                                            @error('fotoPertama')
                                                <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3" style="background-color: grey; ">
                                            <script>
                                                function imgPreviewKedua(){
                                                    // tangkap variabel image dengan id image
                                                    const fotoFKedua = document.querySelector('#fotoKedua');
        
                                                    // ambil tag img kosong untuk preview
                                                    const imgPreview = document.querySelector('.img-previewKedua');
        
                                                    imgPreview.style.display = 'block';
        
                                                    // menangkap gambarnya dari url
                                                    const oFReader = new FileReader();
                                                    oFReader.readAsDataURL(fotoFKedua.files[0]);
        
                                                    
                                                    oFReader.onload = function(oFREvent){
                                                    imgPreview.src = oFREvent.target.result;
                                                    }
                                                }
                                            </script>
                                            <img class="img-previewKedua" width="100%" height="200px">
                                            
                                            <input type="file" name="fotoKedua" id="fotoKedua" class="form-control @error('fotoKedua') is-invalid @enderror" onchange="imgPreviewKedua()">
                                            @error('fotoKedua')
                                                <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
    
                                        <div style="background-color: grey; ">
                                            <script>
                                                function imgPreviewKetiga(){
                                                    // tangkap variabel image dengan id image
                                                    const fotoFKetiga = document.querySelector('#fotoKetiga');
        
                                                    // ambil tag img kosong untuk preview
                                                    const imgPreview = document.querySelector('.img-previewKetiga');
        
                                                    imgPreview.style.display = 'block';
        
                                                    // menangkap gambarnya dari url
                                                    const oFReader = new FileReader();
                                                    oFReader.readAsDataURL(fotoFKetiga.files[0]);
        
                                                    
                                                    oFReader.onload = function(oFREvent){
                                                    imgPreview.src = oFREvent.target.result;
                                                    }
                                                }
                                            </script>
                                            <img class="img-previewKetiga" width="100%" height="200px">
                                            
                                            <input type="file" name="fotoKetiga" id="fotoKetiga" class="form-control @error('fotoKetiga') is-invalid @enderror" onchange="imgPreviewKetiga()">
                                            @error('fotoKetiga')
                                                <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="title" class="form-label"><b>Judul Pengaduan</b></label>
                                        
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required value="{{ old('title') }}" placeholder="Inpu Judul Pengaduan">
                                        
                                        @error('title')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                        @enderror
                                    </div>
    
                                    <div class="mb-4">
                                        <label for="tempatKejadian" class="fomr-label"><b>Tempat Kejadian</b></label>
    
                                        <input type="text" name="tempatKejadian" id="tempatKejadian" class="form-control @error('tempatKejadian') is-invalid @enderror" placeholder="Input Tempat Kejadian" value="{{ old('tempatKejadian') }}" >
    
                                        @error('tempatKejadian')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>                                        
                                        @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="textPengaduan" class="form-label"><b>Detail Pengaduan</b></label>
                                        {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                                        @error('textPengaduan')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="textPengaduan" type="hidden" name="textPengaduan"
                                            value="{{ old('textPengaduan') }}">
                                        <trix-editor style="min-height: 350px" input="textPengaduan"></trix-editor>
                                    </div>
    
                                    <div>
                                        <button class="btn btn-primary" type="submit">Ajukan Pengaduan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    
                
    
                
            </div>
        </div>
    </div>

    <div id="normal">

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
                        <p>Pada menu ini masyarakat dapat melakukan pengaduan terhadap berbagai kegiatan atau tindakan yang dianggap merugikan desa dan masyarakat desa</p>
                        <p>Silakan isi seluruh form pengaduan yang ada dengan sejujur jujurnya tanpa paksaan dari pihak manapun</p>
                    </div>
                    <div class="modal-footer">
                        <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        <div class="px-3" style="text-align: center">
            <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Layanan Pengaduan {{ $profil->namaDesa }}</h3>
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
                                <h5 style="font-family: 'Raleway', sans-serif; margin-top: 10px; text-transform: uppercase">Silakan isi form pengaduan berikut</h5>
                            </div>
                            <div  style="padding: 15px">
                                <form action="/pengaduan/create" method="post" enctype="multipart/form-data">
                                    @csrf
    
                                    <h6 class="mb-3"><b>Foto Pengaduan</b></h6>
                                    <div class="mb-4 d-flex" >
                                        
                                        <div style="background-color: grey; margin-right: 45px">
                                            <script>
                                                function imgPreviewPertama(){
                                                    // tangkap variabel image dengan id image
                                                    const fotoFpertama = document.querySelector('#fotoPertama');
        
                                                    // ambil tag img kosong untuk preview
                                                    const imgPreview = document.querySelector('.img-previewPertama');
        
                                                    imgPreview.style.display = 'block';
        
                                                    // menangkap gambarnya dari url
                                                    const oFReader = new FileReader();
                                                    oFReader.readAsDataURL(fotoFpertama.files[0]);
        
                                                    
                                                    oFReader.onload = function(oFREvent){
                                                    imgPreview.src = oFREvent.target.result;
                                                    }
                                                }
                                            </script>
                                            <img class="img-previewPertama" width="360px" height="200px">
                                            
                                            <input type="file" name="fotoPertama" id="fotoPertama" class="form-control @error('fotoPertama') is-invalid @enderror" onchange="imgPreviewPertama()">
                                            @error('fotoPertama')
                                                <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        
                                        <div style="background-color: grey; margin-right: 45px">
                                            <script>
                                                function imgPreviewKedua(){
                                                    // tangkap variabel image dengan id image
                                                    const fotoFKedua = document.querySelector('#fotoKedua');
        
                                                    // ambil tag img kosong untuk preview
                                                    const imgPreview = document.querySelector('.img-previewKedua');
        
                                                    imgPreview.style.display = 'block';
        
                                                    // menangkap gambarnya dari url
                                                    const oFReader = new FileReader();
                                                    oFReader.readAsDataURL(fotoFKedua.files[0]);
        
                                                    
                                                    oFReader.onload = function(oFREvent){
                                                    imgPreview.src = oFREvent.target.result;
                                                    }
                                                }
                                            </script>
                                            <img class="img-previewKedua" width="360px" height="200px">
                                            
                                            <input type="file" name="fotoKedua" id="fotoKedua" class="form-control @error('fotoKedua') is-invalid @enderror" onchange="imgPreviewKedua()">
                                            @error('fotoKedua')
                                                <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
    
                                        <div style="background-color: grey; ">
                                            <script>
                                                function imgPreviewKetiga(){
                                                    // tangkap variabel image dengan id image
                                                    const fotoFKetiga = document.querySelector('#fotoKetiga');
        
                                                    // ambil tag img kosong untuk preview
                                                    const imgPreview = document.querySelector('.img-previewKetiga');
        
                                                    imgPreview.style.display = 'block';
        
                                                    // menangkap gambarnya dari url
                                                    const oFReader = new FileReader();
                                                    oFReader.readAsDataURL(fotoFKetiga.files[0]);
        
                                                    
                                                    oFReader.onload = function(oFREvent){
                                                    imgPreview.src = oFREvent.target.result;
                                                    }
                                                }
                                            </script>
                                            <img class="img-previewKetiga" width="360px" height="200px">
                                            
                                            <input type="file" name="fotoKetiga" id="fotoKetiga" class="form-control @error('fotoKetiga') is-invalid @enderror" onchange="imgPreviewKetiga()">
                                            @error('fotoKetiga')
                                                <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="title" class="form-label"><b>Judul Pengaduan</b></label>
                                        
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required value="{{ old('title') }}" placeholder="Inpu Judul Pengaduan">
                                        
                                        @error('title')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                        @enderror
                                    </div>
    
                                    <div class="mb-4">
                                        <label for="tempatKejadian" class="fomr-label"><b>Tempat Kejadian</b></label>
    
                                        <input type="text" name="tempatKejadian" id="tempatKejadian" class="form-control @error('tempatKejadian') is-invalid @enderror" placeholder="Input Tempat Kejadian" value="{{ old('tempatKejadian') }}" >
    
                                        @error('tempatKejadian')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>                                        
                                        @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="textPengaduan" class="form-label"><b>Detail Pengaduan</b></label>
                                        {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                                        @error('textPengaduan')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="textPengaduan" type="hidden" name="textPengaduan"
                                            value="{{ old('textPengaduan') }}">
                                        <trix-editor style="min-height: 350px" input="textPengaduan"></trix-editor>
                                    </div>
    
                                    <div>
                                        <button class="btn btn-primary" type="submit">Ajukan Pengaduan</button>
                                    </div>
                                </form>
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