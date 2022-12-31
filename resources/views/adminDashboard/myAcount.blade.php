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
            @if (session()->has('successUpdatedAcount'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('successUpdatedAcount') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            <script>
                function password_show_hideAdmin() {
                    var x = document.getElementById("passwordAdmin");
                    var show_eye = document.getElementById("show_eyeAdmin");
                    var hide_eye = document.getElementById("hide_eyeAdmin");
                    hide_eye.classList.remove("d-none");
                    if (x.type === "password") {
                        x.type = "text";
                        show_eye.style.display = "none";
                        hide_eye.style.display = "block";
                    } else {
                        x.type = "password";
                        show_eye.style.display = "block";
                        hide_eye.style.display = "none";
                    }
                }

            </script>

            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAcount">Update My Acount</button>

                <div class="modal fade" id="editAcount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editAcountLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="editAcountLabel">Edit Acount {{ $user->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <form action="/myAcount/profil/{{ $user->id }}" method="post">
                                @method('get')
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label"><b>Nama User</b></label>

                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" autofocus required value="{{ old('name', $user->name) }}" placeholder="Input your name">
                                        
                                        @error('name')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="userName" class="form-label"><b>UserName</b></label>

                                        <input type="text" name="userName" id="userName" class="form-control @error('userName') is-invalid @enderror" autofocus required value="{{ old('userName', $user->userName) }}" placeholder="Input your userName">
                                        
                                        @error('userName')
                                            <div class="invalid-feedback">
                                                <p style="text-align: left">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label"><b>Status Acount</b></label>

                                        <input type="text" name="status" id="status" class="form-control" readonly  value="{{ $user->status }}" >
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="lembaga_id" class="form-label"><b>Lembaga</b></label>

                                        @if ($user->lembaga_id)
                                            <input type="text" name="lembaga_id" id="lembaga_id" class="form-control" readonly  value="{{ $user->lembaga->namaLembaga }}" >
                                        @else
                                            <input type="text" name="lembaga_id" id="lembaga_id" class="form-control" readonly  value="" placeholder="Admin">
                                        @endif
                                    </div>

                                    <div class="mb-3">

                                        <label for="password" class="form-label"><b>Password</b></label>
                                        <p class="text-muted" style="font-size: 11px; margin-top: -8px;">Password terdiri dari minimal 8 karakter dan maksimal 15 karakter </p>
                                        <p class="text-muted" style="font-size: 11px; margin-top: -8px;">(Huruf besar, Huruf kecil, Angka)</p>

                                        <div class="input-group mb-3">
                                            <input  name="password" type="password" class="input form-control  @error('password') is-invalid @enderror" id="passwordAdmin" placeholder="password" aria-label="password" aria-describedby="basic-addon1" />
                                            
                                            <div  class="input-group-append" >
                                                <span class="input-group-text" onclick="password_show_hideAdmin();" style="height: 39px">
                                                    <i class="fas fa-eye" id="show_eyeAdmin"></i>
                                                    <i class="fas fa-eye-slash d-none" id="hide_eyeAdmin"></i>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        @error('password')
                                                <p style="text-align: left">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Updated</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-4">
                <table class="table" style="text-align: left; color: black">
                    <tr>
                        <td style="width: 15%; font-weight: bold">Nama </td>
                        <td style="width: 85%">: {{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td style="width: 15%; font-weight: bold">Username</td>
                        <td style="width: 85%">: {{ $user->userName }}</td>
                    </tr>
                    <tr>
                        <td style="width: 15%; font-weight: bold">Status Acount</td>
                        <td style="width: 85%" >: <span style="text-transform: capitalize">{{ $user->status }}</span></td>
                    </tr>
                    <tr>
                        <td style="width: 15%; font-weight: bold">Lembaga</td>
                        @if ($user->lembaga_id)
                            <td style="width: 85%">: {{ $user->lembaga->namaLembaga }}</td>
                        @else
                            <td style="width: 85%">: Admin</td>
                        @endif
                    </tr>
                    <tr>
                        <td style="width: 15%; font-weight: bold">Password</td>
                        <td style="width: 85%" >: Password hanya dapat diganti </td>
                    </tr>
                </table>
            </div>

        </div>
    </main>
@endsection