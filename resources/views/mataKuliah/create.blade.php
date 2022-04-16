@extends('layouts.main')

@section('body')
        @include('sections.cardOpen')
        <form method="POST" action="/mataKuliah/create">@csrf
        <h5 class="card-title">Mata Kuliah - Create</h5>
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">            
                <div class="py-2">
                    <label for="inputMataKuliah">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" id="inputMataKuliah" name="namaMataKuliah">
                </div>
                <div class="py-2">
                    <h6>Bidang Keahlian</h6>
                    <select name="idBidangKeahlian" class="form-select" aria-label="Default select example">
                        <option selected hidden> </option>                        
                            @foreach($bidangKeahlian as $bidkah){
                                <option value="{{$bidkah['id']}}">{{$bidkah['namaBidangKeahlian']}}</option>
                            @endforeach
                    </select>                        
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
