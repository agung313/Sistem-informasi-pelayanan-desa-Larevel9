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
                <p><strong>Menu Informasi PERDES</strong> berisi informasi resmi mengenai PERDES {{ $profil->namaDesa }} yang berlaku. Untuk informasi lebih rinci masyarakat dapat langsung hadir ke kantor {{ $profil->namaDesa }}. Untuk membaca atau melihat PERDES secara keseluruhana, tekan tombol read more untuk menampilkan file PERDES.</p>
            </div>
        </div>
    
        <div class="px-3" style="text-align: center">
            <h6 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai PERDES {{ $profil->namaDesa }}</h6>
            <p style="font-size: 13px; text-align: justify">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>

            @foreach ($perdess as $perdes)

                <div class="card w-100" style="margin-bottom: 25px">
                    <div class="btn d-inline-flex " data-bs-toggle="offcanvas" data-bs-target="#offcanvasPerdes{{ $perdes->id }}" aria-controls="offcanvasDarkNavbar" >
                        <img src="/images/filePerdes.png" alt="" width="45px" height="50px">
                        <div class="d-block" style="text-align: left; margin-left: 5px">
                            <p style="font-size: 13px; font-weight: bold">{{ $perdes->titlePerdes }}</p>
                            <p style="font-size: 13px; margin-top: -8px">Diterbitkan Pada : {{ \Carbon\Carbon::parse($perdes->tanggalPerdes_at)->format('d F Y') }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasPerdes{{ $perdes->id }}" aria-labelledby="offcanvasPerdesLabel">
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
                        <h6><b>{{ $perdes->titlePerdes }}</b></h6><br>
                        <div style="width: auto; height: 400px">
                            <iframe src="{{ asset('storage/' . $perdes->filePerdes) }}" frameborder="0" width="100%" height="100%"></iframe>
                        </div>
                    </div>
                </div>
            @endforeach
            
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
                            <p><strong>Menu Informasi PERDES</strong> berisi informasi resmi mengenai PERDES {{ $profil->namaDesa }} yang berlaku. Untuk informasi lebih rinci masyarakat dapat langsung hadir ke kantor {{ $profil->namaDesa }}. Untuk membaca atau melihat PERDES secara keseluruhana, tekan tombol read more untuk menampilkan file PERDES.</p>
                        
                        </div>
                        <div class="modal-footer">
                            <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="px-3" style="text-align: center">
            <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai PERDES {{ $profil->namaDesa }}</h3>
            <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <div class="row d-inline-flex" style="text-align: center; padding: 10px">
                {{-- <img src="../images/filePerdes.png" alt=""> --}}
                <div style="margin-bottom: 15px" >
                    <div class="card" style="width: 1000px">
                        <div class="card-body">
                            <table class="table">
                                @foreach ($perdess as $perdes)
                                    <tbody style="font-weight: bold;">
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td style="vertical-align: middle">{{ $loop->iteration }}</td>
                                        <td><img src="/images/filePerdes.png" alt="" width="45px" height="50px"></td>
                                        <td style="vertical-align: middle; text-align: left">{{ $perdes->titlePerdes }}</td>
                                        <td style="vertical-align: middle; text-align: left">Diterbitkan Pada : {{ \Carbon\Carbon::parse($perdes->tanggalPerdes_at)->format('d F Y') }}</td>
                                        <td style="vertical-align: middle"><button class="bg bg-success" style="color: white" data-bs-toggle="modal" data-bs-target="#perdesModal{{ $perdes->id }}">Read More</button></td>
    
                                        {{-- perdesModal --}}
                                        <div class="modal fade" id="perdesModal{{ $perdes->id }}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 550px; height: 700px">
                                                    <iframe src="{{ asset('storage/' . $perdes->filePerdes) }}" frameborder="0" width="100%" height="100%"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </tbody>
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection