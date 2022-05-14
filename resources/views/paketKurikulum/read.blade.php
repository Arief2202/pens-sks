@extends('layouts.main')
<?php
    if(!isset($request->tingkat))$request->tingkat="";
    if(!isset($request->prodi))$request->prodi="";
    if(!isset($request->semester))$request->semester="";
    if(!isset($request->kurikulum))$request->kurikulum="";
?>
@section('style')
    <link rel="stylesheet" href="css/paketKurikulum/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-3 mt-1">
            <div class="col-6">
                <h5 class="card-title">Paket 
                    @if(isset($request->prodi) && $request->prodi != "" &&
                        isset($request->semester) && $request->semester != "" &&
                        isset($request->kurikulum) && $request->kurikulum != "")
                        {{$request->tingkat}} {{$request->prodi}} Semester {{$request->semester}} Kurikulum {{$kurikulums->where('id', $request->kurikulum)->first()->namaKurikulum}}
                    @endif
                </h5>
            </div>
            <div class="col-6">
                <div class="row d-flex justify-content-end">
                    
                </div>
            </div>
            
            <div class="row mt-2 mb-3">
                <div class="col-lg-3">   
                    Prodi                 
                    <select name="prodi" class="form-select @if($request->prodi == "") is-invalid @endif" id="prodiDropDown">
                        <option hidden value="">Prodi</option>                            
                        <option @if($request->prodi == "D3") selected @endif value="D3">D3</option>
                        <option @if($request->prodi == "D4") selected @endif value="D4">D4</option>
                    </select>     
                </div>
                <div class="col-lg-3">   
                    Semester                 
                    <select name="semester" class="form-select @if($request->prodi != "" && $request->semester == "") is-invalid @endif" id="semesterDropDown" 
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
                    Kurikulum      
                    <select name="kurikulum" class="form-select @if($request->prodi != "" && $request->semester != "" && $request->kurikulum == "") is-invalid @endif" id="kurikulumDropDown"
                        @if($request->prodi == "" || $request->semester == "") disabled @endif>
                            <option hidden value="">Kurikulum</option>
                            @foreach($kurikulums as $kurikulum)
                            <option @if($request->kurikulum == $kurikulum->id) selected @endif value="{{$kurikulum->id}}">{{$kurikulum->namaKurikulum}}</option>
                            @endforeach
                        </select>     
                    {{-- <input type="text" class="form-control" value="{{$kelas->kurikulum()->namaKurikulum}}" disabled>    --}}
                </div>     
                {{-- <div class="col-lg-3"> 
                    @if($request->prodi != "" && $request->semester != "") 
                        <br>                  
                        <button class="btn btn-primary float-end me-3" data-bs-toggle="modal" data-bs-target="#ubahKurikulum">
                            <i class='bx bx-pencil' style="font-size: 15px;"></i>&nbsp;Edit Kurikulum
                        </button>  
                    @endif
                </div>            --}}
            </div>   
            
            @if($request->prodi != "" &&
                $request->semester != "" &&
                $request->kurikulum != "")
            <div class="row mt-3">
                <div class="col mt-2">
                    <h6>Total SKS : <b>
                    <?php
                        $totalSKS = 0;
                        foreach($paketKurikulums as $paketKurikulum){
                            $totalSKS += $paketKurikulum->mataKuliah()->sks;
                        }                 
                        echo $totalSKS;       
                    ?>
                    </b></h6>
                </div>
                <div class="col-7">
                    <div class="d-flex justify-content-end ">
                        <a class="btn btn-primary" href="/paketKurikulum/export_excel" role="button">Export Paket Kurikulum</a>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end ">
                        <a class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Tambahkan Mata Kuliah</a>
                    </div>                
                </div>
            </div>
        </div>

        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">
                <table class="table">
                    <thead class="thead">
                        <tr>
                        <th class="th" scope="col">Nama Mata Kuliah</th>
                        <th class="th" scope="col">SKS</th>
                        <th class="th" scope="col">Jam</th>
                        <th class="th" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paketKurikulums as $paketKurikulum)
                            <tr>
                                <td>{{$paketKurikulum->mataKuliah()->namaMataKuliah}}</td>
                                <td>{{$paketKurikulum->mataKuliah()->sks}}</td>
                                <td>{{$paketKurikulum->mataKuliah()->jam}}</td>
                                <td>
                                    <form action="/paketKurikulum/delete" method="POST">@csrf
                                        <input type="hidden" name="id" value="{{$paketKurikulum->id}}">
                                        <input type="hidden" name="tingkat" value="{{$request->tingkat}}">
                                        <input type="hidden" name="prodi" value="{{$request->prodi}}">
                                        <input type="hidden" name="semester" value="{{$request->semester}}">
                                        <input type="hidden" name="kurikulum" value="{{$request->kurikulum}}">
                                        <button type="submit" style="padding:none;border:none;background:transparent;"><i class='bx bx-trash-alt tableAction'></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                    
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/paketKurikulum" method="POST">@csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambahkan Bidang Keahlian</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  
                            <input type="hidden" name="tingkat" value="{{$request->tingkat}}">
                            <input type="hidden" name="prodi" value="{{$request->prodi}}">
                            <input type="hidden" name="semester" value="{{$request->semester}}">
                            <input type="hidden" name="kurikulum" value="{{$request->kurikulum}}">
                            <h6>Mata Kuliah</h6>
                            <select name="idMataKuliah" class="form-select">
                                    <option selected hidden> </option>                        
                                    @foreach($mataKuliahs as $matkul)
                                        <option value="{{$matkul['id']}}">{{$matkul['namaMataKuliah']}}</option>
                                    @endforeach
                            </select>        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @else
        @if($request->prodi == "")
            <div class="alert alert-danger" role="alert">
                Silahkan pilih Prodi terlebih dahulu
            </div>
        @else
            @if($request->semester == "")
                <div class="alert alert-danger" role="alert">
                    Silahkan pilih Semester
                </div>                
            @else
                <div class="alert alert-danger" role="alert">
                    Silahkan pilih Kurikulum
                </div>
            @endif
        @endif
        @endif
    @include('sections.cardClose')
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#prodiDropDown").change(function() {
                var prodi = $(this).find(":selected").val();
                var kurikulum = "";
                const urlParams = new URLSearchParams(window.location.search);
                if(urlParams.get('kurikulum')){
                    var kurikulum = "&kurikulum="+urlParams.get('kurikulum');
                }
                window.location.replace("http://sks-pens.site/paketKurikulum?prodi="+prodi+kurikulum);
            }) 
            $("#semesterDropDown").change(function() {    
                var semester = $(this).find(":selected").val();
                var kurikulum = "";
                const urlParams = new URLSearchParams(window.location.search);
                if(urlParams.get('kurikulum')){
                    var kurikulum = "&kurikulum="+urlParams.get('kurikulum');
                }
                window.location.replace("http://sks-pens.site/paketKurikulum?prodi="+urlParams.get('prodi')+"&semester="+semester+kurikulum);
            }) 
            $("#kurikulumDropDown").change(function() {    
                var kurikulum = $(this).find(":selected").val();
                const urlParams = new URLSearchParams(window.location.search);
                window.location.replace("http://sks-pens.site/paketKurikulum?prodi="+urlParams.get('prodi')+"&semester="+urlParams.get('semester')+"&kurikulum="+kurikulum);
            }) 
        });
    </script>
    <script type="text/javascript" src="js/paketKurikulum/script.js"></script>
@endsection