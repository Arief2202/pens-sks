@extends('layouts.main')
<?php
    if(!isset($_GET['tingkat']))$_GET['tingkat']="";
    if(!isset($_GET['prodi']))$_GET['prodi']="";
    if(!isset($_GET['semester']))$_GET['semester']="";
    if(!isset($_GET['kurikulum']))$_GET['kurikulum']="";
?>
@section('style')
    <link rel="stylesheet" href="css/paketKurikulum/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-3 mt-1">
            <div class="col-6">
                <h5 class="card-title">Paket Kurikulum 
                    @if(isset($_GET['tingkat']) && $_GET['tingkat'] != "" &&
                        isset($_GET['prodi']) && $_GET['prodi'] != "" &&
                        isset($_GET['semester']) && $_GET['semester'] != "" &&
                        isset($_GET['kurikulum']) && $_GET['kurikulum'] != "")
                        {{$_GET['tingkat']}} {{$_GET['prodi']}} {{$_GET['semester']}} ({{$_GET['kurikulum']}})
                    @endif
                </h5>
            </div>
            <div class="col-6">
                <div class="row d-flex justify-content-end">
                    <div class="col-md-5">    
                        <a href="/kelas" class="btn btn-success d-flex align-items-center">
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
                            <option @if($_GET['tingkat'] == "")selected @endif value="" hidden>Tingkat</option>                        
                            <option @if($_GET['tingkat'] == "1")selected @endif value="1">1</option>
                            <option @if($_GET['tingkat'] == "2")selected @endif value="2">2</option>
                            <option @if($_GET['tingkat'] == "3")selected @endif value="3">3</option>
                            <option @if($_GET['tingkat'] == "4")selected @endif value="4">4</option>
                        </select>     
                    </div>
                    <div class="col-lg-2">         
                        Prodi           
                        <select name="prodi" class="form-select" aria-label="Default select example">
                            <option @if($_GET['prodi'] == "")selected @endif hidden value="">Prodi</option>                        
                                <option @if($_GET['prodi'] == "D3")selected @endif value="D3">D3</option>
                                <option @if($_GET['prodi'] == "D4")selected @endif value="D4">D4</option>
                        </select>     
                    </div>
                    <div class="col-lg-2">      
                        Semester              
                        <select name="semester" class="form-select" aria-label="Default select example">
                            <option @if($_GET['semester'] == "")selected @endif hidden value="">Semester</option>                        
                                <option @if($_GET['semester'] == "Ganjil")selected @endif value="Ganjil">Ganjil</option>
                                <option @if($_GET['semester'] == "Genap")selected @endif value="Genap">Genap</option>
                        </select>     
                    </div>
                    <div class="col-lg-2">  
                        Kurikulum                  
                        <select name="kurikulum" class="form-select" aria-label="Default select example">
                                <option @if($_GET['kurikulum'] == "")selected @endif hidden value="">Kurikulum</option>                        
                                <option @if($_GET['kurikulum'] == "2013")selected @endif value="2013">2013</option>
                                <option @if($_GET['kurikulum'] == "Merdeka")selected @endif value="Merdeka">Merdeka</option>
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

            @if(isset($_GET['tingkat']) && $_GET['tingkat'] != "" &&
                isset($_GET['prodi']) && $_GET['prodi'] != "" &&
                isset($_GET['semester']) && $_GET['semester'] != "" &&
                isset($_GET['kurikulum']) && $_GET['kurikulum'] != "")
            <div class="row mt-3">
                <div class="col mt-2">
                    <h6>Total SKS : <b>15</b></h6>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end ">
                        <a class="btn btn-primary" href="/paketKurikulum/create" role="button">Tambahkan Mata Kuliah</a>
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
                        @for($a=0; $a<5; $a++)
                        <tr>
                            <td>Mata Kuliah {{$a+1}}</td>
                            <td>3</td>
                            <td>
                                <a href="#"><i class='bx bx-trash-alt tableAction'></i></a>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>                    
            </div>
        </div>
        @else
        <div class="container mt-3">
            <div class="alert alert-danger" role="alert">
                Silahkan pilih
                @if($_GET['tingkat'] == "")(Tingkat) @endif
                @if($_GET['prodi'] == "")(prodi) @endif
                @if($_GET['semester'] == "")(semester) @endif
                @if($_GET['kurikulum'] == "")(kurikulum) @endif
                terlebih dahulu
            </div>
        </div>
        @endif
    @include('sections.cardClose')
@endsection


@section('js')
    <script type="text/javascript" src="js/paketKurikulum/script.js"></script>
@endsection