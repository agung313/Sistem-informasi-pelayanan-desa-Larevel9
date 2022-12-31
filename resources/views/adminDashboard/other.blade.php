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
            @if (session()->has('successUpdatedOther'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedOther') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('succesUpdatedLink'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('succesUpdatedLink') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('succesUpdatedSystem'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('succesUpdatedSystem') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if (session()->has('succesUpdatedImage'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('succesUpdatedImage') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif


            <div class="py-4">
                <div id="slideImage" >
                    <div class="d-flex border-bottom " style="padding: 10px">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSystem">Update</button>
                        <h4 style="margin-top: 5px; text-transform: uppercase; font-weight: bold; margin-left: 10px; vertical-align: middle">Related to The System</h4>

                        <!-- Modal sistem -->
                        <div class="modal fade" id="modalSystem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSystemLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalSystemLabel">Update Related to The System</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/other/updateSystem/{{ $other->id }}" method="post">
                                        @method('head')
                                        @csrf
                                        <div class="modal-body">

                                            <div class="d-block mb-3">
                                                <label for="fullTitle" class="form-label" style="font-weight: bold">Nama Sistem</label>
                                                <p class="text-muted" style="font-size: 11px; margin-top: -8px;">Inputkan nama sistem tanpa diikuti nama desa, karena nama desa terinput dalam profil desa</p>
                            
                                                <input style="margin-top: -8px" type="text" class="form-control @error('fullTitle') is-invalid @enderror" id="fullTitle" name="fullTitle" placeholder="Input Nama Sistem" value="{{ old('fullTitle', $other->fullTitle)}}">
                                                @error('fullTitle')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="shortTitle" class="form-label" style="font-weight: bold">Singkatan Sistem</label>
                            
                                                <input type="text" class="form-control @error('shortTitle') is-invalid @enderror" id="shortTitle" name="shortTitle" placeholder="Input Singkatan Sistem" value="{{ old('shortTitle', $other->shortTitle)}}">
                                                @error('shortTitle')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="operationDay" class="form-label" style="font-weight: bold">Hari Oprasional</label>
                            
                                                <input type="text" class="form-control @error('operationDay') is-invalid @enderror" id="operationDay" name="operationDay" placeholder="Input Hari Operasional" value="{{ old('operationDay', $other->operationDay)}}">
                                                @error('operationDay')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="operationTime" class="form-label" style="font-weight: bold">Jam Oprasional</label>
                            
                                                <input type="text" class="form-control @error('operationTime') is-invalid @enderror" id="operationTime" name="operationTime" placeholder="Input Jam Operasional" value="{{ old('operationTime', $other->operationTime)}}">
                                                @error('operationTime')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="contactUsTelpon" class="form-label" style="font-weight: bold">Nomor Telepon Desa</label>
                            
                                                <input type="text" class="form-control @error('contactUsTelpon') is-invalid @enderror" id="contactUsTelpon" name="contactUsTelpon" placeholder="Input Jam Operasional" value="{{ old('contactUsTelpon', $other->contactUsTelpon)}}">
                                                @error('contactUsTelpon')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="contactUsEmail" class="form-label" style="font-weight: bold">Email Desa</label>
                            
                                                <input type="text" class="form-control @error('contactUsEmail') is-invalid @enderror" id="contactUsEmail" name="contactUsEmail" placeholder="Input Jam Operasional" value="{{ old('contactUsEmail', $other->contactUsEmail)}}">
                                                @error('contactUsEmail')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="informationSystem" class="form-label" style="font-weight: bold">Informasi Mengenai Sistem</label>
                            
                                                <textarea rows="6" class="form-control @error('informationSystem') is-invalid @enderror" id="informationSystem" name="informationSystem">{{ old('informationSystem', $other->informationSystem)}}</textarea>
                                                @error('informationSystem')
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
                    </div>

                    <div class="mb-4 mt-4">
                        <h6 class="form-lambel"><b>Nama Sistem</b></h6>
                        <input type="text" class="form-control" value="{{ $other->fullTitle }}" disabled>
                    </div>

                    <div class="mb-4 ">
                        <h6 class="form-lambel"><b>Singkatan Sistem</b></h6>
                        <input type="text" class="form-control" value="{{ $other->shortTitle }}" disabled>
                    </div>

                    <div class="mb-4 ">
                        <h6 class="form-lambel"><b>Hari Oprasional</b></h6>
                        <input type="text" class="form-control" value="{{ $other->operationDay }}" disabled>
                    </div>

                    <div class="mb-4 ">
                        <h6 class="form-lambel"><b>Jam Oprasional</b></h6>
                        <input type="text" class="form-control" value="{{ $other->operationTime }}" disabled>
                    </div>

                    <div class="mb-4 ">
                        <h6 class="form-lambel"><b>Nomor Telepon Desa</b></h6>
                        <input type="text" class="form-control" value="{{ $other->contactUsTelpon }}" disabled>
                    </div>

                    <div class="mb-4 ">
                        <h6 class="form-lambel"><b>Email Desa</b></h6>
                        <input type="text" class="form-control" value="{{ $other->contactUsEmail }}" disabled>
                    </div>

                    <div class="mb-5 ">
                        <h6 class="form-lambel"><b>Informasi Mengenai Sistem</b></h6>
                        <textarea style="padding: 10px; background-color: #e9ecef; border-radius: 5px" cols="155" rows="2" disabled>{{ $other->informationSystem }}</textarea>
                    </div>
                </div>
                <div id="slideImage" class="mt-4">
                    <div class="d-flex border-bottom " style="padding: 10px">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageSlide">Update</button>
                        <h4 style="margin-top: 5px; text-transform: uppercase; font-weight: bold; margin-left: 10px; vertical-align: middle">Image Slide</h4>

                        <!-- Modal image slide -->
                        <div class="modal fade" id="imageSlide" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="imageSlideLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="imageSlideLabel">Update Image Slide</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/other/updateImage/{{ $other->id }}" method="post" enctype="multipart/form-data">
                                        @method('head')
                                        @csrf
                                        <div class="modal-body">

                                            <div class="d-block mb-3">
                                                <label for="fotoPertama" class="form-label" style="font-weight: bold">First Image Slide</label>

                                                <script>
                                                    function previewFotoPertamaSlide(){
                                                        // tangkap variabel image dengan id image
                                                        const fotoPertama = document.querySelector('#fotoPertama');
                        
                                                        // ambil tag img kosong untuk preview
                                                        const imgPreview = document.querySelector('.preview-fotoPertama');
                        
                                                        imgPreview.style.display = 'block';
                        
                                                        // menangkap gambarnya dari url
                                                        const oFReader = new FileReader();
                                                        oFReader.readAsDataURL(fotoPertama.files[0]);
                        
                                                        
                                                        oFReader.onload = function(oFREvent){
                                                        imgPreview.src = oFREvent.target.result;
                                                        }
                                                    }
                                                </script>

                                                @if ($other->fotoPertama)
                                                    <img src="{{ asset('storage/' . $other->fotoPertama) }}" class="d-block w-100" alt="..." height="150px">
                                                @else
                                                <div style="background-color: gray">
                                                    <img class="preview-fotoPertama d-block w-100" height="150px">
                                                </div>
                                                @endif
                                                
                                                <input type="hidden" name="oldFotoPertamaSlide" value="{{ $other->fotoPertama }}">

                                                <input type="file" class="form-control @error('fotoPertama') is-invalid @enderror" id="fotoPertama" name="fotoPertama" onchange="previewFotoPertamaSlide()">
                                                @error('fotoPertama')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="fotoKedua" class="form-label" style="font-weight: bold">Second Image Slide</label>

                                                <script>
                                                    function previewFotoKeduaSlide(){
                                                        // tangkap variabel image dengan id image
                                                        const fotoKedua = document.querySelector('#fotoKedua');
                        
                                                        // ambil tag img kosong untuk preview
                                                        const imgPreview = document.querySelector('.preview-fotoKedua');
                        
                                                        imgPreview.style.display = 'block';
                        
                                                        // menangkap gambarnya dari url
                                                        const oFReader = new FileReader();
                                                        oFReader.readAsDataURL(fotoKedua.files[0]);
                        
                                                        
                                                        oFReader.onload = function(oFREvent){
                                                        imgPreview.src = oFREvent.target.result;
                                                        }
                                                    }
                                                </script>

                                                @if ($other->fotoKedua)
                                                    <img src="{{ asset('storage/' . $other->fotoKedua) }}" class="d-block w-100" alt="..." height="150px">
                                                @else
                                                <div style="background-color: gray">
                                                    <img class="preview-fotoKedua d-block w-100" height="150px">
                                                </div>
                                                @endif

                                                <input type="hidden" name="oldFotoKeduaSlide" value="{{ $other->fotoKedua }}">

                                                <input type="file" class="form-control @error('fotoKedua') is-invalid @enderror" id="fotoKedua" name="fotoKedua" onchange="previewFotoKeduaSlide()">
                                                @error('fotoKedua')
                                                    <div class="invalid-feedback">
                                                    <p style="text-align: left">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="d-block mb-3">
                                                <label for="fotoKetiga" class="form-label" style="font-weight: bold">Third Image Slide</label>
                                                
                                                <script>
                                                    function previewFotoKetigaSlide(){
                                                        // tangkap variabel image dengan id image
                                                        const fotoKetiga = document.querySelector('#fotoKetiga');
                        
                                                        // ambil tag img kosong untuk preview
                                                        const imgPreview = document.querySelector('.preview-fotoKetiga');
                        
                                                        imgPreview.style.display = 'block';
                        
                                                        // menangkap gambarnya dari url
                                                        const oFReader = new FileReader();
                                                        oFReader.readAsDataURL(fotoKetiga.files[0]);
                        
                                                        
                                                        oFReader.onload = function(oFREvent){
                                                        imgPreview.src = oFREvent.target.result;
                                                        }
                                                    }
                                                </script>

                                                @if ($other->fotoKetiga)
                                                    <img src="{{ asset('storage/' . $other->fotoKetiga) }}" class="d-block w-100" alt="..." height="150px">
                                                @else
                                                <div style="background-color: gray">
                                                    <img class="preview-fotoKetiga d-block w-100" height="150px">
                                                </div>
                                                @endif

                                                <input type="hidden" name="oldFotoKetigaSlide" value="{{ $other->fotoKetiga }}">

                                                <input type="file" class="form-control @error('fotoKetiga') is-invalid @enderror" id="fotoKetiga" name="fotoKetiga" onchange="previewFotoKetigaSlide()">
                                                @error('fotoKetiga')
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
                    </div>

                    <div class="mb-5 mt-4">
                        <h6>First Slide Image</h6>
                        <div>
                            <img src="{{ asset('storage/' . $other->fotoPertama) }}" class="d-block w-100" alt="..." height="450px">
                        </div>
                    </div>

                    <div class="mb-5">
                        <h6>Second Slide Image</h6>
                        <div>
                            <img src="{{ asset('storage/' . $other->fotoKedua) }}" class="d-block w-100" alt="..." height="450px">
                        </div>
                    </div>

                    <div class="mb-5">
                        <h6>Third Slide Image</h6>
                        <div>
                            <img src="{{ asset('storage/' . $other->fotoKetiga) }}" class="d-block w-100" alt="..." height="450px">
                        </div>
                    </div>
                </div>

                <div id="SocialMedia" class="py-4">
                    <h4 style="text-transform: uppercase; font-weight: bold" class="border-bottom">Social Media Link</h4>

                    <div class="mt-5">
                        <h6>Youtube Link</h6>
                        <table class="table" style="margin-top: -10px">
                            <tr>
                                <td style="width: 10%"><h1 class="bi bi-youtube" style="color: black; margin-right: 35px; font-size: 60px; "></h1></td>
                                <td style="vertical-align: middle; width: 60%;">
                                    @if ($other->youtubeLink)
                                        <textarea cols="85"  rows="5" disabled style="border: none">{{ $other->youtubeLink }}</textarea>
                                    @else
                                    <p style="color: red; font-weight: bold">Belum ada link yang dicantumkan!</p>
                                    @endif
                                </td>
                                <td>
                                    <div style="margin-top: 25px">
                                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#panduanYoutube">Panduan</button>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalYoutube">Update</button>
                                        <a href="{{ $other->youtubeLink }}" class="btn btn-success" target="_blank">Open Link</a>
                                    </div>
                                </td>
                                <!-- panduan youtube -->
                                <div class="modal fade" id="panduanYoutube" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="panduanYoutubeLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" style="width: 650px">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="panduanYoutubeLabel">Panduan Youtube Link</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" >
                                                <img src="images/Panduan_Youtube.png" width="600px" >
                                                <p style="margin-top: 25px">1. Silakan akses youtube, lalu cari channel youtube anda</p>
                                                <p>2. Silakan click channel youtube anda, lalu copy link seperti gambar di atas</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal youtube -->
                                <div class="modal fade" id="modalYoutube" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalYoutubeLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalYoutubeLabel">Update Youtube Link</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/other/updateLink/{{ $other->id }}" method="post">
                                                @method('head')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="d-block mb-3">
                                                        <label for="youtubeLink" class="form-label" style="font-weight: bold">Youtube Link</label>
                                    
                                                        <input type="text" class="form-control @error('youtubeLink') is-invalid @enderror" id="youtubeLink" name="youtubeLink" placeholder="Input Link" value="{{ old('youtubeLink', $other->youtubeLink)}}">
                                                        @error('youtubeLink')
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
                            </tr>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h6>Facebook Link</h6>
                        <table class="table" style="margin-top: -10px">
                            <tr>
                                <td style="width: 10%"><h1 class="bi bi-facebook" style="color: black; margin-right: 35px; font-size: 60px; "></h1></td>
                                <td style="vertical-align: middle; width: 60%;">
                                    @if ($other->facebookLink)
                                        <textarea cols="85"  rows="5" disabled style="border: none">{{ $other->facebookLink }}</textarea>
                                    @else
                                    <p style="color: red; font-weight: bold">Belum ada link yang dicantumkan!</p>
                                    @endif
                                    
                                </td>
                                <td>
                                    <div style="margin-top: 25px">
                                        <button class="btn btn-info">Panduan</button>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalFacebook">Update</button>
                                        <a href="{{ $other->facebookLink }}" class="btn btn-success" target="_blank">Open Link</a>
                                    </div>
                                </td>
                                 <!-- Modal facebook -->
                                 <div class="modal fade" id="modalFacebook" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFacebookLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalFacebookLabel">Update Facebook Link</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/other/updateLink/{{ $other->id }}" method="post">
                                                @method('head')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="d-block mb-3">
                                                        <label for="facebookLink" class="form-label" style="font-weight: bold">Youtube Link</label>
                                    
                                                        <input type="text" class="form-control @error('facebookLink') is-invalid @enderror" id="facebookLink" name="facebookLink" placeholder="Input Link" value="{{ old('facebookLink', $other->facebookLink)}}">
                                                        @error('facebookLink')
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
                            </tr>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h6>Instagram Link</h6>
                        <table class="table" style="margin-top: -10px">
                            <tr>
                                <td style="width: 10%"><h1 class="bi bi-instagram" style="color: black; margin-right: 35px; font-size: 60px; "></h1></td>
                                <td style="vertical-align: middle; width: 60%;">
                                    @if ($other->instagramLink)
                                        <textarea cols="85"  rows="5" disabled style="border: none">{{ $other->instagramLink }}</textarea>
                                    @else
                                    <p style="color: red; font-weight: bold">Belum ada link yang dicantumkan!</p>
                                    @endif
                                </td>
                                <td>
                                    <div style="margin-top: 25px">
                                        <button class="btn btn-info">Panduan</button>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalInstagran">Update</button>
                                        <a href="{{ $other->instagramLink }}" class="btn btn-success" target="_blank">Open Link</a>
                                    </div>
                                </td>
                                <!-- Modal instagram -->
                                <div class="modal fade" id="modalInstagran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInstagranLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalInstagranLabel">Update Instagram Link</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/other/updateLink/{{ $other->id }}" method="post">
                                                @method('head')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="d-block mb-3">
                                                        <label for="instagramLink" class="form-label" style="font-weight: bold">Youtube Link</label>
                                    
                                                        <input type="text" class="form-control @error('instagramLink') is-invalid @enderror" id="instagramLink" name="instagramLink" placeholder="Input Link" value="{{ old('instagramLink', $other->instagramLink)}}">
                                                        @error('instagramLink')
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
                            </tr>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h6>Google Link</h6>
                        <table class="table" style="margin-top: -10px">
                            <tr>
                                <td style="width: 10%"><h1 class="bi bi-google" style="color: black; margin-right: 35px; font-size: 60px; "></h1></td>
                                <td style="vertical-align: middle; width: 60%;">
                                    @if ($other->googleLink)
                                        <textarea cols="85"  rows="5" disabled style="border: none">{{ $other->googleLink }}</textarea>
                                    @else
                                    <p style="color: red; font-weight: bold">Belum ada link yang dicantumkan!</p>
                                    @endif
                                </td>
                                <td>
                                    <div style="margin-top: 25px">
                                        <button class="btn btn-info">Panduan</button>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalGoogle">Update</button>
                                        <a href="{{ $other->googleLink }}" class="btn btn-success" target="_blank">Open Link</a>
                                    </div>
                                </td>
                                <!-- Modal google -->
                                <div class="modal fade" id="modalGoogle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGoogleLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalGoogleLabel">Update Google Link</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/other/updateLink/{{ $other->id }}" method="post">
                                                @method('head')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="d-block mb-3">
                                                        <label for="googleLink" class="form-label" style="font-weight: bold">Google Link</label>
                                    
                                                        <input type="text" class="form-control @error('googleLink') is-invalid @enderror" id="googleLink" name="googleLink" placeholder="Input Link" value="{{ old('googleLink', $other->googleLink)}}">
                                                        @error('googleLink')
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
                            </tr>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h6>Whatsapp Link</h6>
                        <table class="table" style="margin-top: -10px">
                            <tr>
                                <td style="width: 10%"><h1 class="bi bi-whatsapp" style="color: black; margin-right: 35px; font-size: 60px; "></h1></td>
                                <td style="vertical-align: middle; width: 60%;">
                                    @if ($other->whatsappLink)
                                        <textarea cols="85"  rows="5" disabled style="border: none">{{ $other->whatsappLink }}</textarea>
                                    @else
                                    <p style="color: red; font-weight: bold">Belum ada link yang dicantumkan!</p>
                                    @endif
                                </td>
                                <td>
                                    <div style="margin-top: 25px">
                                        <button class="btn btn-info">Panduan</button>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalWhatsapp">Update</button>
                                        <a href="{{ $other->whatsappLink }}" class="btn btn-success" target="_blank">Open Link</a>
                                    </div>
                                </td>
                                <!-- Modal whatsapp -->
                                <div class="modal fade" id="modalWhatsapp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalWhatsappLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalWhatsappLabel">Update Google Link</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/other/updateLink/{{ $other->id }}" method="post">
                                                @method('head')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="d-block mb-3">
                                                        <label for="whatsappLink" class="form-label" style="font-weight: bold">Whatsapp Link</label>
                                    
                                                        <input type="text" class="form-control @error('whatsappLink') is-invalid @enderror" id="whatsappLink" name="whatsappLink" placeholder="Input Link" value="{{ old('whatsappLink', $other->whatsappLink)}}">
                                                        @error('whatsappLink')
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
                            </tr>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </main>
@endsection