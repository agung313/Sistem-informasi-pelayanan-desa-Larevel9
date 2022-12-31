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

            <form action="/lembaga/{{ $lembaga->id }}" method="post" enctype="multipart/form-data">
    
                @method('put')
                @csrf
                <div class="d-inline-block mb-3" style="text-align: center">
                    {{-- <img src="{{ asset('storage/'. $lembaga->logoLembaga) }}" class="img-fluid rounded-start" alt="..." style="width: 150px"> --}}

                    @if ($lembaga->logoLembaga)
                        <img src="{{ asset('storage/'. $lembaga->logoLembaga) }}" class=" img-previewLogo img-fluid rounded-start" alt="..." style="width: 150px">
                    @else
                        <img class=" img-previewLogo img-fluid rounded-start" alt="..." style="width: 150px">
                    @endif
                </div>

                <div class="py-4">
                    

                        <div class="mb-3">
                            <label for="logoLembaga" class="form-label" style="font-weight: bold">Logo Lembaga</label>

                            <input type="hidden" name="oldImage" value="{{ $lembaga->logoLembaga }}">

                            <input class="form-control @error('logoLembaga') is-invalid @enderror" type="file" id="logoLembaga"
                                name="logoLembaga" onchange="previewLogo()">
                            @error('logoLembaga')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror

                            <script>
                                function previewLogo(){
                                    const logo = document.querySelector('#logoLembaga');
                                    const imgreview = document.querySelector('.img-previewLogo');

                                    const oFReader = new FileReader();
                                    oFReader.readAsDataURL(logo.files[0]);

                                    oFReader.onload = function(oFREvent){
                                        imgreview.src = oFREvent.target.result;
                                    }
                                }
                            </script>
                        </div>

                        <div class="mb-3">
                            <label for="namaLembaga" class="form-label" style="font-weight: bold">Nama Lembaga</label>

                            <input type="text" class="form-control @error('namaLembaga') is-invalid @enderror" id="namaLembaga"
                                name="namaLembaga" placeholder="Input Nama Lembaga " autofocus required
                                value="{{ old('namaLembaga', $lembaga->namaLembaga) }}">
                            @error('namaLembaga')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="singkatan" class="form-label" style="font-weight: bold">Singkatan Lembaga</label>

                            <input type="text" class="form-control @error('singkatan') is-invalid @enderror" id="singkatan"
                                name="singkatan" placeholder="Input Singkatan Lembaga " autofocus required
                                value="{{ old('singkatan', $lembaga->singkatan) }}">
                            @error('singkatan')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label" style="font-weight: bold">Slug Lembaga</label>

                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                name="slug" placeholder="Slug Automatic from Yout Singkatan " 
                                value="{{ old('slug', $lembaga->slug) }}" readonly>
                            @error('slug')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror

                            <script>
                                const title = document.querySelector('#singkatan');
                                const slug = document.querySelector('#slug');
                                // menangani perubahan dari title menjadi slug
                                title.addEventListener('change', function(){
                                    // menangi permintaan slug, ada pada method terbaswah dashboardcontroller
                                    // code di bawah berguna mengambil inputan title.value
                                    fetch('/lembaga/checkSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug)
                                });
                            </script>
                        </div>

                        <div class="mb-3">
                            <label for="ketuaLembaga" class="form-label" style="font-weight: bold">Ketua Lembaga</label>

                            <input type="text" class="form-control @error('ketuaLembaga') is-invalid @enderror" id="ketuaLembaga"
                                name="ketuaLembaga" placeholder="Input Nama Ketua Lembaga " autofocus required
                                value="{{ old('ketuaLembaga', $lembaga->ketuaLembaga) }}">
                            @error('ketuaLembaga')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="desaLembaga" class="form-label" style="font-weight: bold">Desa</label>

                            <input type="text" class="form-control @error('desaLembaga') is-invalid @enderror" id="desaLembaga"
                                name="desaLembaga" placeholder="Input Desa" autofocus required
                                value="{{ old('desaLembaga', $lembaga->desaLembaga) }}">
                            @error('desaLembaga')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kecamatanLembaga" class="form-label" style="font-weight: bold">Kecamatan</label>

                            <input type="text" class="form-control @error('kecamatanLembaga') is-invalid @enderror" id="kecamatanLembaga"
                                name="kecamatanLembaga" placeholder="Input Kecamatan" autofocus required
                                value="{{ old('kecamatanLembaga', $lembaga->kecamatanLembaga) }}">
                            @error('kecamatanLembaga')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kabupatenLembaga" class="form-label" style="font-weight: bold">Kabupaten</label>

                            <input type="text" class="form-control @error('kabupatenLembaga') is-invalid @enderror" id="kabupatenLembaga"
                                name="kabupatenLembaga" placeholder="Input Kabupaten" autofocus required
                                value="{{ old('kabupatenLembaga', $lembaga->kabupatenLembaga) }}">
                            @error('kabupatenLembaga')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="provinsiLembaga" class="form-label" style="font-weight: bold">Provinsi</label>

                            <input type="text" class="form-control @error('provinsiLembaga') is-invalid @enderror" id="provinsiLembaga"
                                name="provinsiLembaga" placeholder="Input Provinsi " autofocus required
                                value="{{ old('provinsiLembaga', $lembaga->provinsiLembaga) }}">
                            @error('provinsiLembaga')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jumlahAnggota" class="form-label" style="font-weight: bold">Jumlah Anggota</label>

                            <input type="text" class="form-control @error('jumlahAnggota') is-invalid @enderror"
                                id="jumlahAnggota" name="jumlahAnggota" placeholder="Input Jumlah Anggota" autofocus
                                required value="{{ old('jumlahAnggota', $lembaga->jumlahAnggota) }} ">
                            @error('jumlahAnggota')
                                <div class="invalid-feedback">
                                    <p style="text-align: left">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label for="sejarahLembaga" class="form-label"><b>Sejarah Lembaga</b></label>
                            {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                            @error('sejarahLembaga')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="sejarahLembaga" type="hidden" name="sejarahLembaga"
                                value="{{ old('sejarahLembaga', $lembaga->sejarahLembaga) }}">
                            <trix-editor input="sejarahLembaga"></trix-editor>
                        </div>

                        <div class="mb-3">

                            <label for="visi" class="form-label"><b>Visi Lembaga</b></label>
                            {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                            @error('visi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="visi" type="hidden" name="visi"
                                value="{{ old('visi', $lembaga->visi) }}">
                            <trix-editor input="visi"></trix-editor>
                        </div>

                        <div class="mb-3">

                            <label for="misi" class="form-label"><b>Misi Lembaga</b></label>
                            {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                            @error('misi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="misi" type="hidden" name="misi"
                                value="{{ old('misi', $lembaga->misi) }}">
                            <trix-editor input="misi"></trix-editor>
                        </div>

                        <div class="mb-3">

                            <label for="tugasLembaga" class="form-label"><b>Tugas Lembaga</b></label>
                            {{-- karena bukan dari boostrap tidak bisa menggunakan class invalid --}}
                            @error('tugasLembaga')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="tugasLembaga" type="hidden" name="tugasLembaga"
                                value="{{ old('tugasLembaga', $lembaga->tugasLembaga) }}">
                            <trix-editor input="tugasLembaga"></trix-editor>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Update Lembaga</button>
                        </div>
                </div>
            </form>
        </div>
    </main>
@endsection