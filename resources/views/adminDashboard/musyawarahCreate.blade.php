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
            <form action="/musyawarah" method="post" enctype="multipart/form-data">
                @csrf

                <div style="text-align: center; height: 500px; overflow: hidden; background-color: grey">
                    <img class="img-previewFutama card-img-top ">
                </div>
                

                <div class="py-4">
                    <div class="mb-3">
                        <label for="fotoUtamaMusyawarah" class="form-label" style="font-weight: bold">Foto Utama Kegiatan</label>

                        <input class="form-control @error('fotoUtamaMusyawarah') is-invalid @enderror" type="file" id="fotoUtamaMusyawarah"
                            name="fotoUtamaMusyawarah" onchange="previewImageFutama()">
                        @error('fotoUtamaMusyawarah')
                            <div class="invalid-feedback">
                                <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror

                        <script>
                            function previewImageFutama(){
                                // tangkap variabel image dengan id image
                                const fotoFutama = document.querySelector('#fotoUtamaMusyawarah');

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
                        <label for="title" class="form-label" style="font-weight: bold">Nama Musyawarah</label>

                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" placeholder="Input Title Activity " autofocus  required
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label" style="font-weight: bold">Slug Musyawarah</label>

                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" placeholder="Slug Automatic from Yout Title " 
                            value="{{ old('slug') }}" readonly disabled>
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
                                fetch('/musyawarah/checkSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug)
                            });
                        </script>
                    </div>

                    <div class="mb-3">
                        <label for="tanggalMusyawarah_at" class="form-label" style="font-weight: bold">Tanggal Pelaksanaan Musyawarah</label>
                        
                        <input type="date" class="form-control @error('tanggalMusyawarah_at') is-invalid @enderror" id="tanggalMusyawarah_at" name="tanggalMusyawarah_at" placeholder="Input your Name Village post" autofocus required value="{{ old('tanggalMusyawarah_at')}}">
                        @error('tanggalMusyawarah_at')
                            <div class="invalid-feedback">
                            <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">

                        <label for="textMusyawarah" class="form-label"><b>Text Musyawarah</b></label>
                        {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                        @error('textMusyawarah')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="textMusyawarah" type="hidden" name="textMusyawarah"
                            value="{{ old('textMusyawarah') }}">
                        <trix-editor input="textMusyawarah"></trix-editor>
                    </div>

                    <div class="py-3">
                        <label><b>Foto Musyawarah</b></label>
                    </div>

                    <div class="mb-3">
                        <div class="row">

                            {{-- foto pertama --}}
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div  style="width: 15rem; height: 140px; overflow: hidden; background-color: grey">
                                        <img class="img-PreviewFpertama card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoPertamaMusyawarah') is-invalid @enderror" type="file" id="fotoPertamaMusyawarah" name="fotoPertamaMusyawarah" onchange="previewImagePertama()">
                                    @error('fotoPertamaMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImagePertama(){
                                            // tangkap variabel image dengan id image
                                            const fotoFpertama = document.querySelector('#fotoPertamaMusyawarah');

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
                                        <img class="img-PreviewFkedua card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKeduaKMusyawarah') is-invalid @enderror" type="file" id="fotoKeduaKMusyawarah" name="fotoKeduaKMusyawarah" onchange="previewImageKedua()">
                                    @error('fotoKeduaKMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKedua(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkedua = document.querySelector('#fotoKeduaKMusyawarah');

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
                                        <img class="img-PreviewFketiga card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKetigaMusyawarah') is-invalid @enderror" type="file" id="fotoKetigaMusyawarah" name="fotoKetigaMusyawarah" onchange="previewImageKetiga()">
                                    @error('fotoKetigaMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKetiga(){
                                            // tangkap variabel image dengan id image
                                            const fotoFketiga = document.querySelector('#fotoKetigaMusyawarah');

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
                                        <img class="img-PreviewFkeempat card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKeempatMusyawarah') is-invalid @enderror" type="file" id="fotoKeempatMusyawarah" name="fotoKeempatMusyawarah" onchange="previewImageKeempat()">
                                    @error('fotoKeempatMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKeempat(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkeempat = document.querySelector('#fotoKeempatMusyawarah');

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
                                        <img class="img-PreviewFkelima card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKelimaMusyawarah') is-invalid @enderror" type="file" id="fotoKelimaMusyawarah" name="fotoKelimaMusyawarah" onchange="previewImageKelima()">
                                    @error('fotoKelimaMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKelima(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkelima = document.querySelector('#fotoKelimaMusyawarah');

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
                                        <img class="img-PreviewFkeenam card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKeenamMusyawarah') is-invalid @enderror" type="file" id="fotoKeenamMusyawarah" name="fotoKeenamMusyawarah" onchange="previewImageKeenam()">
                                    @error('fotoKeenamMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKeenam(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkeenam = document.querySelector('#fotoKeenamMusyawarah');

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
                                        <img class="img-PreviewFketujuh card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKetujuhMusyawarah') is-invalid @enderror" type="file" id="fotoKetujuhMusyawarah" name="fotoKetujuhMusyawarah" onchange="previewImageKetujuh()">
                                    @error('fotoKetujuhMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKetujuh(){
                                            // tangkap variabel image dengan id image
                                            const fotoFketujuh = document.querySelector('#fotoKetujuhMusyawarah');

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
                                        <img class="img-PreviewFkedelapan card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKedelapanMusyawarah') is-invalid @enderror" type="file" id="fotoKedelapanMusyawarah" name="fotoKedelapanMusyawarah" onchange="previewImageKedelapan()">
                                    @error('fotoKedelapanMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKedelapan(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkedelapan = document.querySelector('#fotoKedelapanMusyawarah');

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
                                        <img class="img-PreviewFkesembilan card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKesembilanMusyawarah') is-invalid @enderror" type="file" id="fotoKesembilanMusyawarah" name="fotoKesembilanMusyawarah" onchange="previewImageKesembilan()">
                                    @error('fotoKesembilanMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKesembilan(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkesembilan = document.querySelector('#fotoKesembilanMusyawarah');

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
                                        <img class="img-PreviewFkesepuluh card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKesepuluhMusyawarah') is-invalid @enderror" type="file" id="fotoKesepuluhMusyawarah" name="fotoKesepuluhMusyawarah" onchange="previewImageKesepuluh()">
                                    @error('fotoKesepuluhMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKesepuluh(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkesepuluh = document.querySelector('#fotoKesepuluhMusyawarah');

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
                                        <img class="img-PreviewFkesebelas card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKesebelasMusyawarah') is-invalid @enderror" type="file" id="fotoKesebelasMusyawarah" name="fotoKesebelasMusyawarah" onchange="previewImageKesebelas()">
                                    @error('fotoKesebelasMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKesebelas(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkesebelas = document.querySelector('#fotoKesebelasMusyawarah');

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
                                        <img class="img-PreviewFkeduabelas card-img-top"  >
                                    </div>

                                    <input style="width: 15rem" class="form-control @error('fotoKeduabelasMusyawarah') is-invalid @enderror" type="file" id="fotoKeduabelasMusyawarah" name="fotoKeduabelasMusyawarah" onchange="previewImageKeduabelas()">
                                    @error('fotoKeduabelasMusyawarah')
                                        <div class="invalid-feedback">
                                            <p style="text-align: left">{{ $message }}</p>
                                        </div>
                                    @enderror

                                    <script>
                                        function previewImageKeduabelas(){
                                            // tangkap variabel image dengan id image
                                            const fotoFkeduabelas = document.querySelector('#fotoKeduabelasMusyawarah');

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
                    <button type="submit" class="btn btn-primary">Creted</button>
                </div>

            </form>

        </div>
    </main>
@endsection
