@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
    <form class="need-validation" method="POST" action="/dosen/create">@csrf
        <h5 class="card-title">Dosen - Create</h5>
        {{$errors->first('nama')}}
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">          
                <div class="py-2">
                    <label for="inputNama">Nama</label>
                    <input value="{{old('nama')}}" type="text" class="form-control @if ($errors->first('nama')) is-invalid @endif" id="inputNama" name="nama">
                    @error('nama')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="inputNIP">NIP</label>
                    <input value="{{old('nip')}}" type="text" class="form-control @if ($errors->first('nip')) is-invalid @endif" id="inputNIP" name="nip">
                    @error('nip')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="inputEmail">Email</label>
                    <input value="{{old('email')}}" type="Email" class="form-control @if ($errors->first('email')) is-invalid @endif" id="inputEmail" name="email">
                    @error('email')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror
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
