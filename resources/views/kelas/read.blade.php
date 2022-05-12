@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/kelas/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <div class="col-6">
                <h5 class="card-title">Halaman Kelas</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    {{-- <a class="btn btn-primary me-3" href="/kelas/mengajar" role="button">Mengajar</a> --}}
                    <a class="btn btn-primary" href="/kelas/create" role="button">Tambahkan Data</a>
                </div>
            </div>
        </div>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">Nama Kelas</th>
                            <th class="th" scope="col">Semester</th>
                            <th class="th" scope="col">Kurikulum</th>
                            <th class="th" scope="col">Tahun Ajaran</th>
                            <th class="th" scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($kelas as $kls)
                            <tr>
                                <td>{{$kls['tingkat']}} {{$kls['prodi']}} {{$kls['namaKelas']}}</td>
                                <td>{{$kls['semester']}}</td>
                                <td>{{$kls->kurikulum()->namaKurikulum}}</td>
                                <?php if($kls['prodi'] == 'D3') $plus=2; else $plus=3;?>
                                <td>{{date('Y', strToTime($kls['startTahunAjaran']))}} - {{date('Y', strToTime($kls['startTahunAjaran']))+$plus}}</td>
                                <td>
                                    <a href="/kelas/update/{{$kls->id}}"><i class='bx bx-pencil tableAction'></i></a>
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
    <script type="text/javascript" src="js/kelas/script.js"></script>
@endsection