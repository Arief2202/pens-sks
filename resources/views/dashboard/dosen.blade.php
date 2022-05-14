@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <h5 class="card-title">Beban Dosen</h5>
        @if(isset($errorMessage))
        <div class="alert-danger mt-1 p-2">{{ $errorMessage }}</div>
        @endif
        <div style="max-height: 80vh; overflow-y:auto;">
            <div class="card-text me-3">          
                @if($request->idDosen != "")
                  <p>Beban Max dosen : {{$user->where('id', '=', $request->idDosen)->first()->bebanMengajar}}</p>
                  <div style="max-height: 50vh; overflow-y:auto;">
                    <div class="card-text me-3">
                      <table class="table">
                          <thead class="thead">
                            <tr>
                              <th class="th" scope="col">Tempat Mengajar</th>
                              <th class="th" scope="col">Matkul</th>
                              <th class="th" scope="col">Beban</th>
                              <th class="th" scope="col">SKS</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $totjam = 0;
                              $totsks = 0;
                            ?>
                            @foreach($mengajars as $mengajar)
                            <tr>
                              <td>{{$mengajar->prodi}} Semester {{$mengajar->semester}}</td>
                              <td>{{$mengajar->mataKuliah()->namaMataKuliah}}</td>
                              <td>{{$mengajar->mataKuliah()->jam}}</td>
                              <td>{{$mengajar->mataKuliah()->sks}}</td>
                            </tr>
                            <?php
                              $totjam += $mengajar->mataKuliah()->jam;
                              $totsks += $mengajar->mataKuliah()->sks;
                            ?>
                            @endforeach
                            <tr>
                              <td>Total</td>
                              <td></td>
                              <td>{{$totjam}}</td>
                              <td>{{$totsks}}</td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>
                @else
                  <div class="alert alert-danger" role="alert">
                    Silahkan pilih nama dosen terlebih dahulu
                  </div> 
                @endif
            </div>
        </div>
    @include('sections.cardClose')
@endsection
