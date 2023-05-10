@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <h5 class="card-title">{{$user->where('id', '=', $idDosen)->first()->nama}}</h5>
        @if(isset($errorMessage))
        <div class="alert-danger mt-1 p-2">{{ $errorMessage }}</div>
        @endif
        <div style="max-height: 80vh; overflow-y:auto;">
            <div class="card-text me-3">          
                  <?php 
                    $bebanMax = (int) $user->where('id', '=', $idDosen)->first()->bebanMengajar;
                    $totjam = 0;
                    $totsks = 0;
                    $sameclass = false;
                    $sameclassName = "";
                    foreach($mengajars as $mengajar){
                      
                      $count = $mengajars->where('prodi', '=', $mengajar->prodi)
                                  ->where('semester', '=', $mengajar->semester)
                                  ->where('kelas', '=', $mengajar->kelas)->count();
                      if($count > 1){
                        $sameclass = true;
                        $sameclassName = $mengajar->prodi." Semester ".$mengajar->semester." Kelas ".$mengajar->kelas;
                      }
                      $totjam += (int) $mengajar->mataKuliah()->jam; 
                      $totsks += (int) $mengajar->mataKuliah()->sks; 
                    }                           
                  ?>
                  <p>Beban Max dosen : {{$bebanMax}}</p>
                  @if($totjam > $bebanMax) <div class="alert-danger mb-3 p-2" style="width: 98%;">Dosen ini Kelebihan beban sks</div> @endif
                  {{-- @if($sameclass) <div class="alert-danger mb-3 p-2" style="width: 98%;">Dosen ini Mengajar dikelas yang sama ({{$sameclassName}})</div> @endif --}}
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
                            @foreach($mengajars as $mengajar)
                            <tr>
                              <td>{{$mengajar->prodi}} Semester {{$mengajar->semester}} (Kelas {{$mengajar->kelas}})</td>
                              <td>{{$mengajar->mataKuliah()->namaMataKuliah}}</td>
                              <td>{{$mengajar->mataKuliah()->jam}}</td>
                              <td>{{$mengajar->mataKuliah()->sks}}</td>
                            </tr>
                            @endforeach
                            <tr class="total">
                              <td>Total</td>
                              <td></td>
                              <td>{{$totjam}}</td>
                              <td>{{$totsks}}</td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                  </div> 
            </div>
        </div>
    @include('sections.cardClose')
@endsection


@section('script')    
@endsection