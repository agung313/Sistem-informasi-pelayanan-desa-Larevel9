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


            <div id="fungsiStrktur" class="mb-4 p-2 ">
                <form action="/jabatan/{{ $jabatan->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="py-3">
                        <label for="posisiJabatan" class="form-label"><b>Jabatan</b></label>

                        <input type="text" class="form-control @error('posisiJabatan') is-invalid @enderror"
                            name="posisiJabatan" id="posisiJabatan" required autofocus placeholder="Input Jabatan"
                            value="{{ old('posisiJabatan', $jabatan->posisiJabatan) }}">

                        @error('posisiJabatan')
                            <div class="invalid-feedback">
                                <p style="text-align: left">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="fungsiJabatan" class="form-label"><b>Fungsi Jabatan</b></label>

                        @error('fungsiJabatan')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="fungsiJabatan" type="hidden" name="fungsiJabatan"
                            value="{{ old('fungsiJabatan', $jabatan->fungsiJabatan) }}">
                        <trix-editor input="fungsiJabatan"></trix-editor>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Update Jabatan</button>
                    </div>
                </form>
            </div>


        </div>
    </main>
@endsection
