@extends('layouts.main')
<?php
    if(!isset($request->kelas)) $request->kelas="";
?>


@section('body')
    @include('sections.cardOpen')
    
        <div class="row mb-1 mt-2">
            <div class="col-6">
                @if(isset($request->kelas) && $request->kelas != "")
                    <h5 class="card-title">Halaman Mengajar {{$cariKelas->tingkat}} {{$cariKelas->prodi}} {{$cariKelas->namaKelas}} ({{$cariKelas->semester}})</h5>
                @else
                    <h5 class="card-title">Halaman Mengajar</h5>
                @endif
            </div>
            <h6>Total SKS : <b>15</b></h6>
            
            <form method="GET">
                <div class="row mt-2 mb-3">
                    <div class="col-lg-3">   
                        Kelas                 
                        <select name="kelas" class="form-select" aria-label="Default select example">
                            <option hidden value="">Kelas</option>                            
                            @foreach($kelas as $kls)                                
                                <option @if($request->kelas == $kls->id) selected @endif value="{{$kls->id}}">{{$kls->tingkat}} {{$kls->prodi}} {{$kls->namaKelas}} ({{$kls->semester}})</option>
                            @endforeach
                        </select>     
                    </div>
                    <div class="col-lg-3">  
                        <br>                  
                        <button type="submit" class="btn btn-success d-flex align-items-center">
                            <i class='bx bx-file-find' style="font-size: 20px;"></i>&nbsp;Cari
                        </button>  
                    </div>           
                </div>   
            </form>  
        </div>

        @if(isset($request->kelas) && $request->kelas != "")

            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">Nama Mata Kuliah</th>
                            <th class="th" scope="col">Nama Dosen</th>
                            <th class="th" scope="col">Status</th>
                            <th class="th" scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($paketKurikulums as $paketKurikulum)
                                @if($paketKurikulum->tingkat == $cariKelas->tingkat &&
                                    $paketKurikulum->prodi == $cariKelas->prodi &&
                                    $paketKurikulum->semester == $cariKelas->semester &&
                                    $paketKurikulum->kurikulum_id == $cariKelas->kurikulum_id)
                                <tr>
                                    <td>{{$paketKurikulum->mataKuliah()->namaMataKuliah}}</td>
                                    <td>
                                        @if($cariMengajar = $mengajar->where('mataKuliah_id', '=', $paketKurikulum->mataKuliah()->id)->first())
                                            {{$cariMengajar->dosen()->nama}}
                                        @else
                                            <a type="button" style="padding: none; border: none; background-color:transparent;" href="/kelas/mengajar?kelas={{$request->kelas}}&paketKurikulum={{$paketKurikulum->id}}">
                                                <i class='bx bx-user-plus tableAction ms-4'></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($mengajar->where('mataKuliah_id', '=', $paketKurikulum->mataKuliah()->id)->first())
                                            <i class='bx bxs-circle ms-3 mt-2' style="color:green"></i>
                                        @else
                                            <i class='bx bxs-circle ms-3 mt-2' style="color:red"></i>
                                        @endif
                                    </td>                                    
                                    <td>
                                        @if($cariMengajar = $mengajar->where('mataKuliah_id', '=', $paketKurikulum->mataKuliah()->id)->first())
                                            <form method="POST" action="/kelas/mengajar/delete">@csrf
                                                <input type="hidden" name="mengajar_id" value="{{$cariMengajar->id}}">
                                                <input type="hidden" name="kelas_id" value="{{$request->kelas}}">
                                                <button type="submit" style="border: none; padding: none; background-color: transparent;"><i class='bx bx-user-minus tableAction'></i></button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>

            @if(isset($_GET['paketKurikulum']))
            <form method="POST">@csrf
                <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Dosen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                        
                            <div class="py-2">
                                <h6>Dosen</h6>
                                    <select name="dosen_id" class="form-select" aria-label="Default select example">
                                        <option selected hidden>Pilih Dosen</option>       
                                            @foreach($listPengampu as $pengampu)                                                
                                                <?php
                                                    $minusSKS = 0;
                                                    foreach($mengajarAll->where('dosen_id', '=', $pengampu->dosen_id) as $ajar){
                                                        $minusSKS += intval($ajar->mataKuliah()->sks);
                                                    }
                                                ?>
                                                @if((intval($pengampu->dosen()->CreditSKS)-$minusSKS) >= intval($matkul->sks)))
                                                    <option value="{{$pengampu->dosen_id}}">{{$pengampu->dosen()->nama}}</option>
                                                @endif
                                            @endforeach
                                    </select>     
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            @endif
              
        @else
            <div class="container mt-3">
                <div class="alert alert-danger" role="alert">
                    Silahkan pilih kelas terlebih dahulu
                </div>
            </div>
        @endif

      
    @include('sections.cardClose')
@endsection


@section('script')
    
        @if(isset($_GET['paketKurikulum']))
                <?php
                echo '
                    <script>
                    $(window).on(\'load\',function(){$(\'#exampleModal\').modal(\'show\');});
                    $(\'#exampleModal\').on(\'hidden.bs.modal\', function () {
                        window.location.replace(\'http://sks-pens.site/kelas/mengajar?kelas=';
                echo $request->kelas;
                echo '\');
                    })
                    </script>
                ';
                ?>
            
        @endif        
    
@endsection