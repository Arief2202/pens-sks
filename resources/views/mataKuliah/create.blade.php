@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/mataKuliah/style.css">   
@endsection

@section('body')
<div class="card container" style="margin-top: 8rem; width: 50rem; height: 25rem;">
    <div class="card-body">
        <h5 class="card-title">SKS<br>Mata Kuliah - Create</h5>
        <form method="POST" action="/mataKuliah/create">
            @csrf
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
            <div class="container position-absolute" style="bottom: 3rem; right: 1rem;">
                <button class="btn btn-primary float-end" type="submit">Create</button>
                <button class="btn btn-outline-primary float-end mx-2" type="submit">Cancel</button>
            </div>
        </form>
        </form>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript" src="js/mataKuliah/script.js"></script>
@endsection