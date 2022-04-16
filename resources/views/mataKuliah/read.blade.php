@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/paketKurikulum/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <div class="col-6">
                <h5 class="card-title">Halaman Mata Kuliah</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-primary" href="/mataKuliah/create" role="button">Tambahkan Data</a>
                </div>
            </div>
        </div>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">Nama Mata Kuliah</th>
                            <th class="th" scope="col">Bidang Keahlian</th>
                            <th class="th" scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @for($a=1;$a<100;$a++)
                            <tr>
                              <td>Mata Kuliah {{$a}}</td>
                              <td>Bidang Keahlian {{$a}}</td>
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