@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-2 mt-2">
            <div class="col-6">
                <h5 class="card-title">Dosen - Edit Bidang Keahlian</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-primary" href="/dosen/update/biodata/{{$dosen->id}}">Edit Biodata</a>
                </div>
            </div>
        </div>
        <h5>{{$dosen->nama}} ({{$dosen->nip}})</h5>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambahkan Bidang Keahlian
        </button>

        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th class="th" scope="col">Nama Bidang Keahlian</th>
                            <th class="th" scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarBidangKeahlian as $daftarBidKah)
                        <tr>
                          <td>{{$daftarBidKah->bidangKeahlian()->namaBidangKeahlian}}</td>
                          <td>  
                              <form method="POST" action="/dosen/update/bidangKeahlian/delete">@csrf
                                <input type="hidden" name="idDaftarBidKah" value="{{$daftarBidKah->id}}">
                                <input type="hidden" name="idDosen" value="{{$dosen->id}}">
                                <button type="submit"  style="background:none;border:none;outline:none;"><i class='bx bx-trash-alt tableAction '></i></button>
                              </form>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                    
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                  <form action="/dosen/update/bidangKeahlian/add" method="POST">@csrf
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Bidang Keahlian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">  
                        <input type="hidden" name="idDosen" value="{{$dosen->id}}">
                        <h6>Bidang Keahlian</h6>
                        <select name="idBidangKeahlian" class="form-select" name="idBidangKeahlian">
                                <option selected hidden> </option>                        
                                @foreach($bidangKeahlian as $bidkah)
                                    <option value="{{$bidkah['id']}}">{{$bidkah['namaBidangKeahlian']}}</option>
                                @endforeach
                        </select>        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    @include('sections.cardClose')
@endsection
