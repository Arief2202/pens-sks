@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/mengajar/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
    
        <div class="row mb-1 mt-2">
            <div class="col-6">
                @if($request->prodi != "" && $request->semester != "")
                    <h5 class="card-title">Pengampu {{$cariKelas->prodi}} Semester {{$cariKelas->semester}} (Kurikulum {{$cariKelas->kurikulum()->namaKurikulum}})</h5>
                @else
                    <h5 class="card-title">Halaman Mengajar</h5>
                @endif
            </div>
            
            <div class="row mt-2 mb-3">
                <div class="col-lg-3">   
                    Prodi                 
                    <select name="prodi" class="form-select @if($request->prodi == "")is-invalid @endif" id="prodiDropDown">
                        <option hidden value="">Prodi</option>                            
                        <option @if($request->prodi == "D3") selected @endif value="D3">D3</option>
                        <option @if($request->prodi == "D4") selected @endif value="D4">D4</option>
                    </select>     
                </div>
                <div class="col-lg-3">   
                    Semester                 
                    <select name="semester" class="form-select @if($request->prodi != "" && $request->semester == "")is-invalid @endif" id="semesterDropDown" 
                    @if($request->prodi == "") disabled @endif>
                        <option hidden value="">Semester</option>                            
                        <option @if($request->semester == "1") selected @endif value="1">1</option>
                        <option @if($request->semester == "2") selected @endif value="2">2</option>
                        <option @if($request->semester == "3") selected @endif value="3">3</option>
                        <option @if($request->semester == "4") selected @endif value="4">4</option>
                        <option @if($request->semester == "5") selected @endif value="5">5</option>
                        <option @if($request->semester == "6") selected @endif value="6">6</option>
                        @if($request->prodi == "D4")
                            <option @if($request->semester == "7") selected @endif value="7">7</option>
                            <option @if($request->semester == "8") selected @endif value="8">8</option>
                        @endif
                    </select>     
                </div>
                <div class="col-lg-3">  
                    @if($request->prodi != "" && $request->semester != "") 
                    Kurikulum      
                    <input type="text" class="form-control" value="{{$kelas->kurikulum()->namaKurikulum}}" disabled>   
                    @endif 
                </div>     
                <div class="col-lg-3"> 
                    @if($request->prodi != "" && $request->semester != "") 
                        <br>                  
                        <button class="btn btn-primary float-end me-3" data-bs-toggle="modal" data-bs-target="#ubahKurikulum">
                            <i class='bx bx-pencil' style="font-size: 15px;"></i>&nbsp;Edit Kurikulum
                        </button>  
                    @endif
                </div>           
            </div>   
        </div>        
            

        @if($request->prodi != "" && $request->semester != "")
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">Mata Kuliah</th>
                            <th class="th" scope="col">SKS</th>
                            <th class="th" scope="col">Jam</th>
                            <th class="th" scope="col">Dosen Kelas A</th>
                            <th class="th" scope="col">Dosen Kelas B</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($paketKurikulums as $paketKurikulum)
                                @if($paketKurikulum->prodi == $cariKelas->prodi &&
                                    $paketKurikulum->semester == $cariKelas->semester &&
                                    $paketKurikulum->kurikulum_id == $cariKelas->kurikulum_id)
                                <tr>
                                    <td>{{$paketKurikulum->mataKuliah()->namaMataKuliah}}</td>
                                    <td>{{$paketKurikulum->mataKuliah()->sks}}</td>
                                    <td>{{$paketKurikulum->mataKuliah()->jam}}</td>
                                    <td>
                                        @if($pengajar = $mengajar->where('kelas', '=', 'A')->where('mataKuliah_id', '=', $paketKurikulums->where('id', '=', $paketKurikulum->id)->first()->mataKuliah()->id)->first())
                                            <form action="/mengajar/delete" method="POST">@csrf
                                                <input type="hidden" name="mengajar_id" value="{{$pengajar->id}}">
                                                <input type="hidden" name="prodi" value="{{$request->prodi}}">
                                                <input type="hidden" name="semester" value="{{$request->semester}}">
                                                <div class="deleteDosen">
                                                    <div class="deleteDosenName">{{$pengajar->dosen()->nama}}</div>
                                                    <button type="submit" class="deleteDosenImg"  style="padding: none; border: none; background-color:transparent;" >
                                                        <i class='bx bx-user-minus tableAction ms-4'></i>
                                                    </button>
                                                </div>
                                            </form>
                                        @else
                                            <a type="button" style="padding: none; border: none; background-color:transparent;" href="/mengajar?prodi={{$request->prodi}}&semester={{$request->semester}}&kelas=A&paketKurikulum={{$paketKurikulum->id}}">
                                                <i class='bx bx-user-plus tableAction ms-4'></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pengajar = $mengajar->where('kelas', '=', 'B')->where('mataKuliah_id', '=', $paketKurikulums->where('id', '=', $paketKurikulum->id)->first()->mataKuliah()->id)->first())
                                            <form action="/mengajar/delete" method="POST">@csrf
                                                <input type="hidden" name="mengajar_id" value="{{$pengajar->id}}">
                                                <input type="hidden" name="prodi" value="{{$request->prodi}}">
                                                <input type="hidden" name="semester" value="{{$request->semester}}">
                                                <div class="deleteDosen">
                                                    <div class="deleteDosenName">{{$pengajar->dosen()->nama}}</div>
                                                    <button type="submit" class="deleteDosenImg"  style="padding: none; border: none; background-color:transparent;" >
                                                        <i class='bx bx-user-minus tableAction ms-4'></i>
                                                    </button>
                                                </div>
                                            </form>
                                        @else
                                            <a type="button" style="padding: none; border: none; background-color:transparent;" href="/mengajar?prodi={{$request->prodi}}&semester={{$request->semester}}&kelas=B&paketKurikulum={{$paketKurikulum->id}}">
                                                <i class='bx bx-user-plus tableAction ms-4'></i>
                                            </a>
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
                <input type="hidden" name="mataKuliah_id" value="{{$matkul->id}}">
                <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Dosen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                           
                            <div class="py-2">
                                <pre>Mata Kuliah : {{$matkul->namaMataKuliah}}<br>Kelas       : {{$request->kelas}}</pre>
                            </div>                        
                            <div class="py-2">
                                <h6>Dosen</h6>
                                    <select name="dosen_id" class="form-select" aria-label="Default select example">
                                        <option selected hidden>Pilih Dosen</option>       
                                            @foreach($listPengampu as $pengampu)    
                                                <option value="{{$pengampu->dosen_id}}">{{$pengampu->dosen()->nama}}</option>
                                            @endforeach
                                    </select>     
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>            
            @endif

            <form method="POST" action="/mengajar/ubahKurikulum">@csrf
                <input type="hidden" name="idKelas" value="{{$kelas->id}}">
                <div class="modal fade" id="ubahKurikulum">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Kurikulum {{$request->prodi}} Semester {{$request->semester}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                        
                            <div class="py-2">
                                <h6>Kurikulum</h6>
                                    <select name="kurikulum" class="form-select" aria-label="Default select example">
                                        <option selected hidden value="">Pilih Kurikulum</option> 
                                            @foreach($kurikulums as $kurikulum)
                                                @if($kelas->kurikulum_id != $kurikulum->id)
                                                    <option value="{{$kurikulum->id}}">{{$kurikulum->namaKurikulum}}</option>
                                                @endif
                                            @endforeach
                                    </select>     
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            
            @else('kelas')
                @if($request->prodi == "")
                    <div class="alert alert-danger" role="alert">
                        Silahkan pilih prodi terlebih dahulu
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Silahkan pilih semester
                    </div>                
                @endif
        </form>  
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
                        window.location.replace(\'http://sks-pens.site/mengajar?prodi=';
                echo $request->prodi;
                echo '&semester=';
                echo $request->semester;
                echo '\');
                    })
                    </script>
                ';
                ?>            
        @endif        
        <script type="text/javascript">
            $(document).ready(function(){  
                $("#prodiDropDown").change(function() {    
                    var prodi = $(this).find(":selected").val();
                    window.location.replace("http://sks-pens.site/mengajar?prodi="+prodi);
                });
                $("#semesterDropDown").change(function() {    
                    var semester = $(this).find(":selected").val();
                    const urlParams = new URLSearchParams(window.location.search);
                    window.location.replace("http://sks-pens.site/mengajar?prodi="+urlParams.get('prodi')+"&semester="+semester);
                });
            });
        </script>
    
@endsection