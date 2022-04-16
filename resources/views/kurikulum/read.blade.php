@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <div class="col-6">
                <h5 class="card-title">Halaman Kurikulum</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-primary" href="/kurikulum/create" role="button">Tambahkan Data</a>
                </div>
            </div>
        </div>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">Nama Kurikulum</th>
                            <th class="th" scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @for($a=1;$a<22;$a++)
                            <tr>
                              <td>Kurikulum 20{{$a<10?'0':''}}{{$a}}</td>
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
    <script type="text/javascript" src="js/kurikulum/script.js"></script>
@endsection