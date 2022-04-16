@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/paketKurikulum/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-1 mt-2">
            <div class="col-6">
                <h5 class="card-title">Paket Kurikulum 2 D3 Ganjil (2013)</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-primary" href="/paketKurikulum/create" role="button">Tambahkan Data</a>
                </div>
            </div>
            <h6>Total SKS : <b>15</b></h6>
            <div class="row mt-2 mb-3">
                <div class="col-lg-2">   
                    Tingkat                 
                    <select name="tingkat" class="form-select" aria-label="Default select example">
                        <option hidden>Tingkat</option>                        
                        <option value="1">1</option>
                        <option selected value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>     
                </div>
                <div class="col-lg-2">         
                    Prodi           
                    <select name="tingkat" class="form-select" aria-label="Default select example">
                        <option selected hidden>Prodi</option>                        
                            <option selected value="D3">D3</option>
                            <option value="D4">D4</option>
                    </select>     
                </div>
                <div class="col-lg-2">      
                    Semester              
                    <select name="tingkat" class="form-select" aria-label="Default select example">
                        <option selected hidden>Semester</option>                        
                            <option selected value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                    </select>     
                </div>
                <div class="col-lg-2">  
                    Kurikulum                  
                    <select name="tingkat" class="form-select" aria-label="Default select example">
                        <option hidden>Kurikulum</option>                        
                            <option selected value="2013">2013</option>
                            <option value="Merdeka">Merdeka</option>
                    </select>     
                </div>
                <div class="col-lg-2">  
                    <br>                  
                    <button type="button" class="btn btn-success d-flex align-items-center">
                        <i class='bx bx-file-find' style="font-size: 20px;"></i>&nbsp;Cari
                    </button>  
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
                            @for($a=1;$a<6;$a++)
                            <tr>
                              <td>Mata Kuliah {{$a}}</td>
                              <td>3</td>
                              <td>
                                  <a href="#"><i class='bx bx-pencil tableAction'></i></a>
                              </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>                    
                </div>
            </div>
    @include('sections.cardClose')
@endsection


@section('js')
    <script type="text/javascript" src="js/paketKurikulum/script.js"></script>
@endsection