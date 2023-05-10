@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/bidangKeahlian/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <h5 class="card-title">Halaman Beban Dosen</h5>
        </div>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">NIP</th>
                            <th class="th" scope="col">Nama Dosen</th>
                            {{-- <th class="th" scope="col">Keahlian</th> --}}
                            {{-- <th class="th" scope="col">Jabatan</th> --}}
                            <th class="th" scope="col">Jatah</th>
                            <th class="th" scope="col">Beban</th>
                            <th class="th" scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $dosen)
                              <?php                                
                                $bebanMax = (int) $user->where('id', '=', $dosen->id)->first()->bebanMengajar;
                                $totjam = 0;
                                $totsks = 0;
                                $sameclass = false;
                                $error = false;
                                foreach($mengajar->where('dosen_id', '=', $dosen->id) as $ajar){                                  
                                  $count = $ajar->where('prodi', '=', $ajar->prodi)
                                              ->where('semester', '=', $ajar->semester)
                                              ->where('kelas', '=', $ajar->kelas)->count();
                                  if($count > 1) $sameclass = true;
                                  $totjam += (int) $ajar->mataKuliah()->jam; 
                                  $totsks += (int) $ajar->mataKuliah()->sks; 
                                }            
                                if($totjam > $bebanMax) $error = true;
                              ?>
                              <tr @if($error) class="error" @endif>
                              <td>{{$dosen['nip']}}</td>
                              <td>{{$dosen['nama']}}</td>
                              <td>{{intval($dosen['bebanMengajar'])/* - $totalJam*/}}</td>
                              <td>{{intval($totjam)/* - $totalJam*/}}</td>
                              <td>
                                <a href="/dosen/beban/{{$dosen->id}}" style="background:none;border:none;outline:none;"><i class='ms-2 bx bx-right-arrow-circle tableAction'></i></a>
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
    <script type="text/javascript" src="js/bidangKeahlian/script.js"></script> 
@endsection
