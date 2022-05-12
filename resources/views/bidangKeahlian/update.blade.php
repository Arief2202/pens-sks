@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/bidangKeahlian/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
    <form method="POST" action="/bidangKeahlian/update">@csrf
        <h5 class="card-title">Bidang Keahlian - Update</h5>
        <input type="hidden" name="idBidangKeahlian" value="{{$bidangKeahlian->id}}">
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">
                <div class="py-2">
                    <label for="inputBidangKeahlian">Nama Bidang Keahlian</label>
                    <input type="text" class="form-control" id="inputBidangKeahlian" name="namaBidangKeahlian" value="{{$bidangKeahlian->namaBidangKeahlian}}">
                </div>
            </div>
        </div>

        <div class="float-end mt-4 mb-3 me-3">
            <a class="btn btn-outline-secondary" href="/bidangKeahlian">Cancel</a>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>        
    @include('sections.cardClose')
@endsection

@section('js')
    <script type="text/javascript" src="js/bidangKeahlian/script.js"></script> 
@endsection
