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
                <h5 class="card-title">Paket Kurikulum 
                    @if(isset($request->tingkat) && $request->tingkat != "" &&
                        isset($request->prodi) && $request->prodi != "" &&
                        isset($request->semester) && $request->semester != "" &&
                        isset($request->kurikulum) && $request->kurikulum != "")
                        {{$request->tingkat}} {{$request->prodi}} {{$request->semester}} (Kurikulum {{$kurikulums->where('id', $request->kurikulum)->first()->namaKurikulum}})
                    @endif
                </h5>
            </div>
            <div class="col-6">
                <div class="row d-flex justify-content-end">
                    <div class="col-md-5">    
                        <a href="/mataKuliah" class="btn btn-success d-flex align-items-center">
                            <i class='bx bx-book' style="font-size: 20px;"></i>&nbsp;Mata Kuliah
                        </a> 
                    </div>
                    <div class="col-md-4">    
                        <a href="/kurikulum" class="btn btn-success d-flex align-items-center">
                            <i class='bx bx-bookmark-alt-minus' style="font-size: 20px;"></i>&nbsp;Kurikulum
                        </a> 
                    </div>
                </div>
            </div>
            <form action="/paketKurikulum" method="GET">
                <div class="row mt-2 mb-3 me-1">
                    <div class="col-lg-2">   
                        Tingkat                 
                        <select name="tingkat" class="form-select" aria-label="Default select example">
                            <option @if($request->tingkat == "")selected @endif value="" hidden>Tingkat</option>                        
                            <option @if($request->tingkat == "1")selected @endif value="1">1</option>
                            <option @if($request->tingkat == "2")selected @endif value="2">2</option>
                            <option @if($request->tingkat == "3")selected @endif value="3">3</option>
                            <option @if($request->tingkat == "4")selected @endif value="4">4</option>
                        </select>     
                    </div>
                    <div class="col-lg-2">         
                        Prodi           
                        <select name="prodi" class="form-select" aria-label="Default select example">
                            <option @if($request->prodi == "")selected @endif hidden value="">Prodi</option>                        
                                <option @if($request->prodi == "D3")selected @endif value="D3">D3</option>
                                <option @if($request->prodi == "D4")selected @endif value="D4">D4</option>
                        </select>     
                    </div>
                    <div class="col-lg-2">      
                        Semester              
                        <select name="semester" class="form-select" aria-label="Default select example">
                            <option @if($request->semester == "")selected @endif hidden value="">Semester</option>                        
                                <option @if($request->semester == "Ganjil")selected @endif value="Ganjil">Ganjil</option>
                                <option @if($request->semester == "Genap")selected @endif value="Genap">Genap</option>
                        </select>     
                    </div>
                    <div class="col-lg-2">  
                        Kurikulum                  
                        <select name="kurikulum" class="form-select" aria-label="Default select example">
                            <option @if($request->kurikulum == "")selected @endif hidden value="">Kurikulum</option> 
                            @foreach($kurikulums as $kurikulum)
                                <option {{$request->kurikulum == (int)$kurikulum->id?"selected":""}} value='{{$kurikulum->id}}'>{{$kurikulum->namaKurikulum}}</option>
                            @endforeach                       
                                {{-- <option @if($request->kurikulum == "2013")selected @endif value="2013">2013</option>
                                <option @if($request->kurikulum == "Merdeka")selected @endif value="Merdeka">Merdeka</option> --}}
                        </select>     
                    </div>
                    <div class="col-lg-2">  
                        <br>                
                        <button type="submit" class="btn btn-success d-flex align-items-center">
                            <i class='bx bx-file-find' style="font-size: 20px;"></i>&nbsp;Cari
                        </button>    
                    </div>    
                    {{-- <div class="col-lg-2">  
                        <br>       
                    </div>     --}}
                </div>
            </form>       

            @if(isset($request->tingkat) && $request->tingkat != "" &&
                isset($request->prodi) && $request->prodi != "" &&
                isset($request->semester) && $request->semester != "" &&
                isset($request->kurikulum) && $request->kurikulum != "")
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
                        <th class="th" scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paketKurikulums as $paketKurikulum)
                            <tr>
                                <td>{{$paketKurikulum->mataKuliah()->namaMataKuliah}}</td>
                                <td>{{$paketKurikulum->mataKuliah()->sks}}</td>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @else
        <div class="container mt-3">
            <div class="alert alert-danger" role="alert">
                Silahkan pilih
                @if($request->tingkat == "")(Tingkat) @endif
                @if($request->prodi == "")(prodi) @endif
                @if($request->semester == "")(semester) @endif
                @if($request->kurikulum == "")(kurikulum) @endif
                terlebih dahulu
            </div>
        </div>
        @endif
    @include('sections.cardClose')
@endsection


@section('js')
    <script type="text/javascript" src="js/paketKurikulum/script.js"></script>
@endsection