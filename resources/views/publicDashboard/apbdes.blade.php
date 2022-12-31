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
                <p><strong>Menu Informasi APBDES</strong> berisi informasi resmi mengenai APBDES {{ $profil->namaDesa }} terbaru. Untuk informasi lebih rinci masyarakat dapat langsung hadir ke kantor {{ $profil->namaDesa }}. Tekan gambar rincian APBDES untuk melihat dalam skala lebih besar.</p>
            </div>
        </div>
        
    
        <div style="text-align: center">
            <h6 class="text-center px-2" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai APBDES {{ $profil->namaDesa }}</h6>
            <p style="font-size: 13px; text-align: justify">Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <br>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4" >
                        <img src="{{ asset('storage/'. $apbdes->fotoApbdes) }}" class="img-fluid rounded-start" alt="..." width="450px" height="700px">
                    </div>
    
                    <div class="col-md-8">
                        <div class="card-body">
                        <h6 class="card-title mt-3" style="font-family: 'Raleway', sans-serif; text-transform: uppercase">{{ $apbdes->titleApbdes }}</h6>
                        <p class="card-text" style="margin-top: -8px; font-size: 13px">Berikut Rincian APBDES {{ $profil->namaDesa }}</p>
                        
                        
                        <table class="table">
                            <tbody style="text-align: left; color: black">
                                @foreach ($dataApbdes as $item)
                                    <tr class="table-{{ $item->colorData }}" style="font-weight: {{ ($item->colorData === null) ? '400' : 'bold' }}">
                                        <td style="padding: 10px"><p style="font-size: 13px;">{{ $item->titleData }}</p><p style="font-size: 13px">{{ ($item->isiData === null) ? '' : ': Rp. ' }} {{ $item->isiData }}</p></td>
                                    </tr>
                                        
                                @endforeach
                            
                            </tbody>
                        </table>
        
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
                            <p><strong>Menu Informasi APBDES</strong> berisi informasi resmi mengenai APBDES {{ $profil->namaDesa }} terbaru. Untuk informasi lebih rinci masyarakat dapat langsung hadir ke kantor {{ $profil->namaDesa }}. Tekan gambar rincian APBDES untuk melihat dalam skala lebih besar.</p>
                        
                        </div>
                        <div class="modal-footer">
                            <p><b>JAM OPERASIONAL : {{ $other->operationTime }} WIB</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="px-3" style="text-align: center">
            <h3 class="text-center" style="font-family: 'Raleway', sans-serif;">Berikut Merupakan Informasi Mengenai APBDES {{ $profil->namaDesa }}</h3>
            <p>Tekan tombol help information yang berada di sebelah kiri berbentuk tanda tanya untuk mendapatkan penjelesan mengenai sistem dan menu</p>
            <br>
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4" type="button" data-bs-toggle="modal" data-bs-target="#apbdesModal">
                    <img src="{{ asset('storage/'. $apbdes->fotoApbdes) }}" class="img-fluid rounded-start" alt="..." width="450px" height="700px">
                  </div>
                  {{-- modal apbdes --}}
                    <div class="modal fade" id="apbdesModal" tabindex="-1" aria-labelledby="apbdeseModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="width: 600px; height: 750px">
                                <img src="{{ asset('storage/'. $apbdes->fotoApbdes) }}" class="img-fluid rounded-start" alt="..." width="100%" height="100%">
                            </div>
                        </div>
                    </div>
    
                  <div class="col-md-8">
                    <div class="card-body">
                      <h4 class="card-title" style="font-family: 'Raleway', sans-serif; text-transform: uppercase">{{ $apbdes->titleApbdes }}</h4>
                      <p class="card-text" style="margin-top: -8px">Berikut Rincian APBDES {{ $profil->namaDesa }}</p>
    
                      <table class="table">
                        <tbody style="text-align: left; color: black">
                            @foreach ($dataApbdes as $item)
                                <tr class="table-{{ $item->colorData }}" style="font-weight: {{ ($item->colorData === null) ? '400' : 'bold' }}">
                                    <td>{{ $item->titleData }}</td>
                                    <td>{{ ($item->isiData === null) ? '' : ': Rp. ' }} {{ $item->isiData }}</td>
                                </tr>
                                    
                            @endforeach
                           
                        </tbody>
                      </table>
    
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    


</div>
@endsection