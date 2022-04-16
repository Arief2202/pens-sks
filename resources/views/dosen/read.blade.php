@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/bidangKeahlian/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <div class="col-6">
                <h5 class="card-title">Halaman Dosen</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-primary" href="/dosen/create" role="button">Tambahkan Dosen</a>
                </div>
            </div>
        </div>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">NIP</th>
                            <th class="th" scope="col">Nama Dosen</th>
                            <th class="th" scope="col">Jabatan</th>
                            <th class="th" scope="col">Credit SKS</th>
                            <th class="th" scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @for($a=0;$a<99;$a++)
                            <tr>
                              <td>31205000{{$a+1<10?'0':''}}{{$a+1}}</td>
                              <td>Anonymous</td>
                              <td>Dosen</td>
                              <td>0</td>
                              <td>
                                  <a href="/dosen/edit"><i class='bx bx-pencil tableAction'></i></a>
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
    <script type="text/javascript" src="js/bidangKeahlian/script.js"></script> 
@endsection
