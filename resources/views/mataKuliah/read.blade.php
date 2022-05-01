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
                            <th class="th" scope="col">Jam</th>
                            <th class="th" scope="col">SKS</th>
                            <th class="th" scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($mataKuliah as $mk)
                            <tr>
                              <td>{{$mk['namaMataKuliah']}}</td>
                              <td>
                              {{-- @foreach($bidangKeahlian as $bk)
                              @if($bk->id == $mk->idBidangKeahlian) --}}
                              {{$mk->bidangKeahlian()->namaBidangKeahlian}}
                              {{-- @endif
                              @endforeach --}}
                              </td>
                              <td>{{$mk['jam']}}</td>
                              <td>{{$mk['sks']}}</td>
                              <td>
                                  <a href="/mataKuliah/update/{{$mk->id}}"><i class='bx bx-pencil tableAction'></i></a>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
    @include('sections.cardClose')
@endsection


@section('js')
    <script type="text/javascript" src="js/paketKurikulum/script.js"></script>
@endsection