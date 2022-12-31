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
            <form action="/kegiatan/{{ $kegiatan->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div style="text-align: center; height: 500px; overflow: hidden;">
                    @if ($kegiatan->fotoUtamaKegiatan)
                        <img src="{{ asset('storage/' . $kegiatan->fotoUtamaKegiatan) }}" class="img-previewFutama card-img-top">
                    @else
                        <img class="img-previewFutama card-img-top ">
                    @endif
                </div>
                

                <div class="py-4">
                    <h3 style="text-transform: capitalize; text-align: center"><b>{{ $kegiatan->title }}</b></h3><br>
                    <div class="mb-3">
                        <label for="fotoUtamaKegiatan" class="form-label" style="font-weight: bold">Foto Utama Kegiatan</label>

                        <input type="hidden" name="oldImageKegiatan" value="{{ $kegiatan->fotoUtamaKegiatan }}">

                        <input class="form-control @error('fotoUtamaKegiatan') is-invalid @enderror" type="file" id="fotoUtamaKegiatan"
                            name="fotoUtamaKegiatan" onchange="previewImageFutama()">
                        @error('fotoUtamaKegiatan')
                            <div class="invalid-feedback">
                                <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror

                        <script>
                            function previewImageFutama(){
                                // tangkap variabel image dengan id image
                                const fotoFutama = document.querySelector('#fotoUtamaKegiatan');

                                // ambil tag img kosong untuk preview
                                const imgPreview = document.querySelector('.img-previewFutama');

                                imgPreview.style.display = 'block';

                                // menangkap gambarnya dari url
                                const oFReader = new FileReader();
                                oFReader.readAsDataURL(fotoFutama.files[0]);

                                
                                oFReader.onload = function(oFREvent){
                                    imgPreview.src = oFREvent.target.result;
                                }
                            }
                        </script>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label" style="font-weight: bold">Nama Kegiatan</label>

                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" placeholder="Input Title Activity " autofocus  required
                            value="{{ old('title', $kegiatan->title) }}">
                        @error('title')
                            <div class="invalid-feedback">
                                <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label" style="font-weight: bold">Slug Kegiatan</label>

                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" placeholder="Slug Aoutomatic From Title " 
                            value="{{ old('slug', $kegiatan->slug) }}" readonly>
                        @error('slug')
                            <div class="invalid-feedback">
                                <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror

                        <script>
                            const title = document.querySelector('#title');
                            const slug = document.querySelector('#slug');
                            // menangani perubahan dari title menjadi slug
                            title.addEventListener('change', function(){
                                // menangi permintaan slug, ada pada method terbaswah dashboardcontroller
                                // code di bawah berguna mengambil inputan title.value
                                fetch('/kegiatan/checkSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug)
                            });
                        </script>
                    </div>

                    <div class="mb-3">
                        <label for="tanggalKegiatan_at" class="form-label" style="font-weight: bold">Tanggal Pelaksanaan Kegiatan</label>
                        
                        <input type="date" class="form-control @error('tanggalKegiatan_at') is-invalid @enderror" id="tanggalKegiatan_at" name="tanggalKegiatan_at" placeholder="Input your Name Village post" autofocus required value="{{ old('tanggalKegiatan_at', $kegiatan->tanggalKegiatan_at)}}">
                        @error('tanggalKegiatan_at')
                            <div class="invalid-feedback">
                            <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lembaga_id" class="form-label" style="font-weight: bold">Penajah Kegiatan</label>

                        <select class="form-select mt-2" name="lembaga_id" id="lembaga_id">
                            @if ($kegiatan->lembaga_id === null)
                                <option value="" selected>Masyarakat Umum</option>
                            @else
                                <option value="{{ $kegiatan->lembaga_id }}" selected>{{ $kegiatan->lembaga->singkatan }}</option>
                            @endif

                                <option value="">Masyarakat Umum</option>
                            @foreach ($lembagas as $lembaga)
                                <option value="{{ $lembaga->id }}" style="text-transform: uppercase !important">{{ $lembaga->singkatan }}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="mb-3">

                        <label for="textKegiatan" class="form-label"><b>Text Kegiatan</b></label>
                        {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                        @error('textKegiatan')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="textKegiatan" type="hidden" name="textKegiatan"
                            value="{{ old('textKegiatan', $kegiatan->textKegiatan) }}">
                        <trix-editor input="textKegiatan"></trix-editor>
                    </div>

                    <div class="py-3">
                        <label><b>Foto Kegiatan</b></label>
                    </div>

                    <div class="mb-3">
                        <div class="row">


                            {{-- foto pertama --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoPertamaKegiatan)
                                            <img class="img-PreviewFpertama card-img-top" src="{{ asset('storage/' . $kegiatan->fotoPertamaKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFpertama card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanPertama" value="{{ $kegiatan->fotoPertamaKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoPertamaKegiatan') is-invalid @enderror" type="file" id="fotoPertamaKegiatan" name="fotoPertamaKegiatan" onchange="previewImagePertama()">
                                    @error('fotoPertamaKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImagePertama(){
                                            // tangkap variabel image dengan id image
                                            const fotoFpertama = document.querySelector('#fotoPertamaKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFpertama');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFpertama.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto kedua --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKeduaKegiatan)
                                            <img class="img-PreviewFkedua card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKeduaKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkedua card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKedua" value="{{ $kegiatan->fotoKeduaKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKeduaKegiatan') is-invalid @enderror" type="file" id="fotoKeduaKegiatan" name="fotoKeduaKegiatan" onchange="previewImageKedua()">
                                    @error('fotoKeduaKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKedua(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkedua = document.querySelector('#fotoKeduaKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkedua');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkedua.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto ketiga --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKetigaKegiatan)
                                            <img class="img-PreviewFketiga card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKetigaKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFketiga card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKetiga" value="{{ $kegiatan->fotoKetigaKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKetigaKegiatan') is-invalid @enderror" type="file" id="fotoKetigaKegiatan" name="fotoKetigaKegiatan" onchange="previewImageKetiga()">
                                    @error('fotoKetigaKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKetiga(){
                                            // tangkap variabel image dengan id image
                                            const fotoFketiga = document.querySelector('#fotoKetigaKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFketiga');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFketiga.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto keempat --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKeempatKegiatan)
                                            <img class="img-PreviewFkeempat card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKeempatKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkeempat card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKeempat" value="{{ $kegiatan->fotoKeempatKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKeempatKegiatan') is-invalid @enderror" type="file" id="fotoKeempatKegiatan" name="fotoKeempatKegiatan" onchange="previewImageKeempat()">
                                    @error('fotoKeempatKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKeempat(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkeempat = document.querySelector('#fotoKeempatKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkeempat');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkeempat.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto kelima --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKelimaKegiatan)
                                            <img class="img-PreviewFkelima card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKelimaKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkelima card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKelima" value="{{ $kegiatan->fotoKelimaKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKelimaKegiatan') is-invalid @enderror" type="file" id="fotoKelimaKegiatan" name="fotoKelimaKegiatan" onchange="previewImageKelima()">
                                    @error('fotoKelimaKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKelima(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkelima = document.querySelector('#fotoKelimaKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkelima');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkelima.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto keenam --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKeenamKegiatan)
                                            <img class="img-PreviewFkeenam card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKeenamKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkeenam card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKeenam" value="{{ $kegiatan->fotoKeenamKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKeenamKegiatan') is-invalid @enderror" type="file" id="fotoKeenamKegiatan" name="fotoKeenamKegiatan" onchange="previewImageKeenam()">
                                    @error('fotoKeenamKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKeenam(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkeenam = document.querySelector('#fotoKeenamKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkeenam');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkeenam.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto ketujh --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKetujuhKegiatan)
                                            <img class="img-PreviewFketujuh card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKetujuhKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFketujuh card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKetujuh" value="{{ $kegiatan->fotoKetujuhKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKetujuhKegiatan') is-invalid @enderror" type="file" id="fotoKetujuhKegiatan" name="fotoKetujuhKegiatan" onchange="previewImageKetujuh()">
                                    @error('fotoKetujuhKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKetujuh(){
                                            // tangkap variabel image dengan id image
                                            const fotoFketujuh = document.querySelector('#fotoKetujuhKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFketujuh');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFketujuh.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto kedelapan --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKedelapanKegiatan)
                                            <img class="img-PreviewFkedelapan card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKedelapanKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkedelapan card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKedelapan" value="{{ $kegiatan->fotoKedelapanKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKedelapanKegiatan') is-invalid @enderror" type="file" id="fotoKedelapanKegiatan" name="fotoKedelapanKegiatan" onchange="previewImageKedelapan()">
                                    @error('fotoKedelapanKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKedelapan(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkedelapan = document.querySelector('#fotoKedelapanKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkedelapan');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkedelapan.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto kesembilan --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKesembilanKegiatan)
                                            <img class="img-PreviewFkesembilan card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKesembilanKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkesembilan card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKesembilan" value="{{ $kegiatan->fotoKesembilanKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKesembilanKegiatan') is-invalid @enderror" type="file" id="fotoKesembilanKegiatan" name="fotoKesembilanKegiatan" onchange="previewImageKesembilan()">
                                    @error('fotoKesembilanKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKesembilan(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkesembilan = document.querySelector('#fotoKesembilanKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkesembilan');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkesembilan.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto kesepuluh --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKesepuluhKegiatan)
                                            <img class="img-PreviewFkesepuluh card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKesepuluhKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkesepuluh card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKesepuluh" value="{{ $kegiatan->fotoKesepuluhKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKesepuluhKegiatan') is-invalid @enderror" type="file" id="fotoKesepuluhKegiatan" name="fotoKesepuluhKegiatan" onchange="previewImageKesepuluh()">
                                    @error('fotoKesepuluhKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKesepuluh(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkesepuluh = document.querySelector('#fotoKesepuluhKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkesepuluh');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkesepuluh.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto kesebelas --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKesebelasKegiatan)
                                            <img class="img-PreviewFkesebelas card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKesebelasKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkesebelas card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKesebelas" value="{{ $kegiatan->fotoKesebelasKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKesebelasKegiatan') is-invalid @enderror" type="file" id="fotoKesebelasKegiatan" name="fotoKesebelasKegiatan" onchange="previewImageKesebelas()">
                                    @error('fotoKesebelasKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKesebelas(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkesebelas = document.querySelector('#fotoKesebelasKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkesebelas');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkesebelas.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                            {{-- foto keduabelas --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        @if ($kegiatan->fotoKeduabelasKegiatan)
                                            <img class="img-PreviewFkeduabelas card-img-top" src="{{ asset('storage/' . $kegiatan->fotoKeduabelasKegiatan) }}" >
                                        @else
                                            <img class="img-PreviewFkeduabelas card-img-top"  >
                                        @endif
                                    </div>

                                    <input type="hidden" name="oldImageKegiatanKeduabelas" value="{{ $kegiatan->fotoKeduabelasKegiatan }}">

                                    <input style="width: 15rem" class="form-control @error('fotoKeduabelasKegiatan') is-invalid @enderror" type="file" id="fotoKeduabelasKegiatan" name="fotoKeduabelasKegiatan" onchange="previewImageKeduabelas()">
                                    @error('fotoKeduabelasKegiatan')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKeduabelas(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkeduabelas = document.querySelector('#fotoKeduabelasKegiatan');

                                            // ambil tag img kosong untuk preview
                                            const imgPreview = document.querySelector('.img-PreviewFkeduabelas');

                                            imgPreview.style.display = 'block';

                                            // menangkap gambarnya dari url
                                            const oFReader = new FileReader();
                                            oFReader.readAsDataURL(fotoFkeduabelas.files[0]);

                                            
                                            oFReader.onload = function(oFREvent){
                                            imgPreview.src = oFREvent.target.result;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>

                           

                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Update Kegiatan</button>
                </div>

            </form>

        </div>
    </main>
@endsection
