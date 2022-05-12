@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
    <form method="POST" action="/paketKurikulum/create">@csrf
        <h5 class="card-title">Paket Praktikum - Create</h5>
        @if(isset($errorMessage))
        <div class="alert-danger mt-1 p-2">{{ $errorMessage }}</div>
        @endif   
        
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">        
                <div class="py-2">
                    <h6>Nama Kurikulum</h6>
                        <select name="idKurikulum" class="form-select" aria-label="Default select example">
                            <option selected hidden> </option>                        
                                @foreach($kurikulum as $kuri){
                                    <option value="{{$kuri['id']}}">{{$kuri['namaKurikulum']}}</option>
                                @endforeach
                        </select>     
                </div>
                <div class="py-2">
                    <h6>Tingkat</h6>
                        <select name="tingkat" class="form-select" aria-label="Default select example">
                            <option selected hidden> </option>                        
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                        </select>     
                </div>
                <div class="py-2">
                    <h6>Prodi</h6>
                        <select name="prodi" class="form-select" aria-label="Default select example">
                            <option selected hidden> </option>                        
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                        </select>     
                </div>
                <div class="py-2">
                    <h6>Semester</h6>
                        <select name="semester" class="form-select" aria-label="Default select example">
                            <option selected hidden> </option>                        
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                        </select>     
                </div>
                <div class="py-2">
                    <h6>Mata Kuliah</h6>
                        <select name="idMataKuliah" class="form-select" aria-label="Default select example">
                            <option selected hidden> </option>                        
                                @foreach($mataKuliah as $matkul){
                                    <option value="{{$matkul['id']}}">{{$matkul['namaMataKuliah']}}</option>
                                @endforeach
                        </select>     
                </div>
                <label for="inputSKSMatakulliah">SKS Mata Kuliah</label>
                <input type="text" class="form-control" id="inputSKSMatakulliah" name="sksMataKuliah">
            </div>
        </div>
        <div class="float-end mt-4 mb-3 me-1">
            <a class="btn btn-outline-secondary" href="/paketKurikulum">Cancel</a>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
    @include('sections.cardClose')
@endsection
