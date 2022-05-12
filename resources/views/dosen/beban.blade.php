@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <h5 class="card-title">Beban Dosen</h5>
        @if(isset($errorMessage))
        <div class="alert-danger mt-1 p-2">{{ $errorMessage }}</div>
        @endif
        <div style="max-height: 80vh; overflow-y:auto;">
            <div class="card-text me-3">          
                <div class="py-2">
                    <label for="inputNama">Nama Dosen</label>
                    <select name="namaDosen" class="form-select @if($request->idDosen == "")is-invalid @endif" id="namaDosenDropDown">
                        <option selected hidden></option>
                        @foreach($user as $dosen)
                        <option @if($request->idDosen == $dosen->id) selected @endif value="{{$dosen['id']}}">{{$dosen['nama']}}</option>
                        @endforeach
                    </select>
                    {{-- @error('namaDosen')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror --}}
                </div>
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
                            @foreach($mengajars as $mengajar)
                            <tr>
                              <td>{{$mengajar->prodi}} Semester {{$mengajar->semester}}</td>
                              <td>{{$mengajar->mataKuliah()->namaMataKuliah}}</td>
                              <td>{{$mengajar->mataKuliah()->jam}}</td>
                              <td>{{$mengajar->mataKuliah()->sks}}</td>
                            </tr>
                            @endforeach
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


@section('script')    
        <script type="text/javascript">
            $(document).ready(function(){  
                $("#namaDosenDropDown").change(function() {    
                    var idDosen = $(this).find(":selected").val();
                    window.location.replace("http://sks-pens.site/dosen/profile?idDosen="+idDosen);
                });
            });
        </script>    
@endsection