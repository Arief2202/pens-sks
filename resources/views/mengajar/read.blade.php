@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/paketKurikulum/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-1 mt-2">
            <div class="col-6">
                <h5 class="card-title">Data Dosen 2 D3 Ganjil (2013)</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-primary" href="/paketKurikulum/create" role="button">Tambahkan Data</a>
                </div>
            </div>
            <h6>Total SKS : <b>15</b></h6>
            <div class="row mt-2 mb-3">
                <div class="col-lg-4">   
                    Kelas                 
                    <select name="tingkat" class="form-select" aria-label="Default select example">
                        <option hidden>Kelas</option>
                        @foreach($kelas as $kls)
                            <option value="{{$kls->id}}">{{$kls->tingkat}} {{$kls->prodi}} {{$kls->namaKelas}} ({{$kls->semester}})</option>
                        @endforeach
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
                            <th class="th" scope="col">Nama Dosen</th>
                            <th class="th" scope="col">Status</th>
                            <th class="th" scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Matematika
                                </td>
                                <td>
                                    <button type="button" style="padding: none; border: none; background-color:transparent;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class='bx bxs-user-plus tableAction ms-4'></i>
                                    </button>
                                    
                                </td>
                                <td>
                                    <i class='bx bxs-circle ms-3 mt-2' style="color:red"></i>
                                </td>
                                <td>
                                    <a href="#"><i class='bx bx-pencil tableAction'></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Bahasa Inggris 2
                                </td>
                                <td>
                                     Pak Irwan
                                </td>
                                <td>
                                    <i class='bx bxs-circle ms-3 mt-2' style="color:green"></i>
                                </td>
                                <td>
                                    <a href="#"><i class='bx bx-pencil tableAction'></i></a>
                                </td>
                            </tr>
                            {{-- @foreach($paketKurikulum as $pk) --}}
                            {{-- <tr>
                              <td>{{$pk['']}}</td>
                              <td>{{$pk['']}}</td>
                              {{-- belum selesai --}}
                              {{-- <td>
                                  <a href="#"><i class='bx bx-pencil tableAction'></i></a>
                              </td>
                            </tr> --}}
                            {{-- @endforeach --}}
                        </tbody>
                    </table>                    
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambahkan Dosen</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">                        
                        <div class="py-2">
                            <h6>Dosen</h6>
                                <select name="idMataKuliah" class="form-select" aria-label="Default select example">
                                    <option selected hidden> </option>                        
                                        @for($a = 0; $a<10; $a++)
                                            <option value="{{$a}}">Dosen {{$a+1}}</option>
                                        @endfor
                                </select>     
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
    @include('sections.cardClose')
@endsection


@section('js')
    <script type="text/javascript" src="js/paketKurikulum/script.js"></script>
@endsection