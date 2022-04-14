@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/bidangKeahlian/style.css">    
@endsection

@section('body')
<div class="card container" style="margin-top: 8rem; width: 50rem; height: 25rem;">
    <div class="card-body">
        <h5 class="card-title">SKS<br>  Bidang Keahlian - Create</h5>
        <form method="POST" action="/bidangKeahlian/create">
            @csrf
            <div class="py-2">
                <label for="inputBidangKeahlian">Nama Bidang Keahlian</label>
                <input type="text" class="form-control" id="inputBidangKeahlian" name="namaBidangKeahlian">
            </div>
            <div>
                <button class="btn btn-primary float-end" type="submit">Create</button>
                <button class="btn btn-outline-primary float-end mx-2" type="submit">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript" src="js/bidangKeahlian/script.js"></script> 
@endsection
