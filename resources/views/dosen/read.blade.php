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
                  <a class="btn btn-primary px-2" href="/dosen/create" role="button">Export Data</a>
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
                            {{-- <th class="th" scope="col">Keahlian</th> --}}
                            {{-- <th class="th" scope="col">Jabatan</th> --}}
                            <th class="th" scope="col">Pembebanan Jam</th>
                            <th class="th" scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $dosen)
                              <?php
                                $totalJam = 0;
                                foreach($mengajar->where('dosen_id', '=', $dosen->id) as $ajar){
                                  $totalJam += intval($ajar->mataKuliah()->jam);
                                }
                              ?>
                            <tr>
                              <td>{{$dosen['nip']}}</td>
                              <td>{{$dosen['nama']}}</td>

                              {{-- <td>
                                <?php $totalLoop = 0;?>
                                @foreach($daftarbidkah as $bidkah)
                                  @if($bidkah->dosen_id == $dosen->id)
                                    @if($totalLoop++!=0), &nbsp;@endif
                                    {{$bidkah->bidangKeahlian()->namaBidangKeahlian}}
                                  @endif
                                @endforeach
                              </td> --}}

                              {{-- <td>
                                @if($dosen->role == 1)
                                Kaprodi
                                @elseif($dosen->role == 2)
                                Dosen
                                @endif
                                </td> --}}
                              <td>{{intval($dosen['bebanMengajar'])/* - $totalJam*/}}</td>
                                {{-- kurang sks maks dari masing masing dosen --}}
                              <td>
                                <a href="/dosen/update/bidangKeahlian/{{$dosen->id}}" style="background:none;border:none;outline:none;"><i class='bx bx-pencil tableAction'></i></a>
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
