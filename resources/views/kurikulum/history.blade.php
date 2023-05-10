@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <div class="col-6">
                <h5 class="card-title">History Kurikulum</h5>
            </div>
        </div>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                          <tr>
                            <th class="th" scope="col">Nama Kurikulum</th>
                            <th class="th" scope="col">Created At</th>
                            <th class="th" scope="col">Updated At</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($kurikulums as $kurikulum)
                            <tr>
                              <td>{{$kurikulum['namaKurikulum']}}</td>
                              <td>{{$kurikulum['created_at']}}</td>
                              <td>{{$kurikulum['updated_at']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
    @include('sections.cardClose')
@endsection


@section('js')
    <script type="text/javascript" src="js/kurikulum/script.js"></script>
@endsection