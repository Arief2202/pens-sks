@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/mataKuliah/style.css">   
@endsection

@section('body')
@include('sections.cardOpen')
        <form method="POST" action="/mataKuliah/update">@csrf
        <h5 class="card-title">Mata Kuliah - Update</h5>
        <input type="hidden" name="idMataKuliah" value="{{$mataKuliah->id}}">
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">            
                <div class="py-2">
                    <label for="inputMataKuliah">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" id="inputMataKuliah" name="namaMataKuliah" value="{{$mataKuliah->namaMataKuliah}}">
                </div>
                <div class="py-2">
                    <h6>Bidang Keahlian</h6>
                    <select name="idBidangKeahlian" class="form-select" aria-label="Default select example">
                            @foreach($bidangKeahlian as $bidkah){
                                <option @if($mataKuliah->bidangKeahlian_id == $bidkah->id) selected @endif value="{{$bidkah['id']}}">{{$bidkah['namaBidangKeahlian']}}</option>
                            @endforeach
                    </select>                        
                </div>
                <div class="py-2">
                    <label for="sks">SKS</label>
                    <input type="number" class="form-control" id="sks" name="sks" value = "{{$mataKuliah->sks}}">
                </div>
                <div class="py-2">
                    <label for="sks">Jam</label>
                    <input type="number" class="form-control" id="jam" name="jam" value = "{{$mataKuliah->jam}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mt-4 me-3">
                    <a class="btn btn-warning" href="/mataKuliah/delete/{{Request::segment(3)}}">Delete</a>
                </div>                
            </div>
            <div class="col">
                <div class="float-end mt-4 me-3">
                    <a class="btn btn-outline-danger" href="/mataKuliah">Cancel</a>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
        </div>
        </form>
        @include('sections.cardClose')
@endsection

@section('js')
    <script type="text/javascript" src="js/mataKuliah/script.js"></script>
@endsection