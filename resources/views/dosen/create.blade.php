@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
    <form method="POST" action="/dosen/create">@csrf
        <h5 class="card-title">Dosen - Create</h5>  
        
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">          
                <div class="py-2">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" name="nama">
                </div>
                <div class="py-2">
                    <label for="inputNIP">NIP</label>
                    <input type="text" class="form-control" id="inputNIP" name="nip">
                </div>
                <div class="py-2">
                    <label for="inputEmail">Email</label>
                    <input type="Email" class="form-control" id="inputEmail" name="email">
                </div>
            </div>
        </div>
        <div class="float-end mt-4 mb-3 me-3">
            <a class="btn btn-outline-danger" href="/dosen">Cancel</a>
            <button class="btn btn-success" type="submit">Create</button>
        </div>
        </form>
    @include('sections.cardClose')
@endsection
