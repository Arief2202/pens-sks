@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
    <form method="POST" action="/sksMaks/update">@csrf
        <h5 class="card-title">SKS Maks - Edit</h5>    
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">        
                <div class="py-2">
                    <p>Nilai SKS Maks Sekarang : {{$sksMaks['nilaiSKSMaks']}}</p>
                    <label for="inputSKSMaks">Nilai SKS Maks Baru :</label>
                    <input type="number" class="form-control" id="inputSKSMaks" name="nilaiSKSMaks">
                </div>
            </div>
        </div>
        <div class="float-end mt-4 mb-3 me-3">
            <a class="btn btn-outline-danger" href="/dosen">Cancel</a>
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
    @include('sections.cardClose')
@endsection