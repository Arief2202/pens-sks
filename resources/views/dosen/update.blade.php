@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <div class="col-6">
                <h5 class="card-title">Dosen - Edit Biodata</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <div class="d-flex justify-content-end ">
                        <a class="btn btn-primary" href="/dosen/update/bidangKeahlian/{{$dosen->id}}">Edit Bidang Keahlian</a>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="/dosen/update/biodata">@csrf
            <input type="hidden" name="idDosen" value="{{$dosen->id}}">
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">   
                    <div class="py-2">
                        <label for="inputNIP">NIP</label>
                        <input type="text" class="form-control" id="inputNIP" name="nip"  value="{{$dosen->nip}}">
                    </div>       
                    <div class="py-2">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" id="inputNama" name="nama" value="{{$dosen->nama}}">
                    </div>
                    <div class="py-2">
                        <label for="inputNama">Alias</label>
                        <input type="text" class="form-control" id="inputNama" name="alias" value="{{$dosen->alias}}">
                    </div>
                    <div class="py-2">
                        <label for="inputEmail">Email</label>
                        <input type="Email" class="form-control" id="inputEmail" name="email"  value="{{$dosen->email}}">
                    </div>
                    <div class="py-2">
                        <label for="inputEmail">Password</label>
                        <input type="password" class="form-control" id="inputEmail" name="password"  value="{{$dosen->password}}">
                    </div>
                    <div class="py-2">
                        <label for="inputEmail">Beban Mengajar</label>
                        <input type="number" class="form-control" id="inputEmail" name="bebanMengajar"  value="{{$dosen->bebanMengajar}}">
                    </div>
                    <div class="py-2">
                        <label for="inputEmail">Role</label>
                        <select name="role" class="form-select" aria-label="Default select example">
                            <option hidden> </option>                        
                                <option {{$dosen->role == 1? "selected" : ""}} value="1">Kaprodi</option>
                                <option {{$dosen->role == 2? "selected" : ""}} value="2">Dosen</option>
                        </select> 
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-6 mt-4">
                    <a href="/dosen/delete/{{$dosen->id}}" class="btn btn-warning">Delete</a>
                </div>
                <div class="col-6">
                    <div class="float-end mt-4 me-3">
                        <a class="btn btn-outline-secondary me-2" href="/dosen">Cancel</a>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>                    
                </div>
            </div>
        </form>
    @include('sections.cardClose')
@endsection
