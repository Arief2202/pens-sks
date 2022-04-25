@extends('layouts.main')

@section('body')
        @include('sections.cardOpen')
        <form method="POST" action="/mataKuliah/create">@csrf
        <h5 class="card-title">Mata Kuliah - Create</h5>
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">            
                <div class="py-2">
                    <label for="inputMataKuliah">Nama Mata Kuliah</label>
                    <input value="{{old('namaMataKuliah')}}" type="text" class="form-control @if ($errors->first('namaMataKuliah')) is-invalid @endif" id="inputMataKuliah" name="namaMataKuliah">
                    @error('namaMataKuliah')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="py-2">
                    <h6>Bidang Keahlian</h6>
                    <select value="{{old('idBidangKeahlian')}}" name="idBidangKeahlian" class="form-select @if ($errors->first('idBidangKeahlian')) is-invalid @endif" aria-label="Default select example">
                        <option selected hidden> </option>                        
                            @foreach($bidangKeahlian as $bidkah){
                                <option value="{{$bidkah['id']}}">{{$bidkah['namaBidangKeahlian']}}</option>
                            @endforeach
                    </select>
                    @error('idBidangKeahlian')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror                        
                </div>
                <div class="py-2">
                    <label for="sks">SKS</label>
                    <input type="number" class="form-control @if ($errors->first('sks')) is-invalid @endif" id="sks" name="sks">
                    @error('sks')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="float-end mt-4 mb-3 me-3">
            <a class="btn btn-outline-danger" href="/mataKuliah">Cancel</a>
            <button class="btn btn-success" type="submit">Create</button>
        </div>
        </form>
        @include('sections.cardClose')
@endsection
