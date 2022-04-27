@extends('layouts.main')

@section('body')

    @include('sections.cardOpen')
    <form method="POST" action="/bidangKeahlian/create">@csrf
        <h5 class="card-title">Bidang Keahlian - Create</h5>
        @if(isset($errorMessage))
        <div class="alert-danger mt-1 p-2">{{ $errorMessage }}</div>
        @endif
    
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">
                <div class="py-2">
                    <label for="inputBidangKeahlian">Nama Bidang Keahlian</label>
                    <input type="text" class="form-control @error('namaBidangKeahlian') is-invalid @enderror" id="inputBidangKeahlian" name="namaBidangKeahlian">
                    @error('namaBidangKeahlian')
                    <div class="alert-danger mt-1 p-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="float-end mt-4 mb-3 me-3">
            <a class="btn btn-outline-danger" href="/bidangKeahlian">Cancel</a>
            <button class="btn btn-success" type="submit">Create</button>
        </div>
    </form>        
    @include('sections.cardClose')
@endsection
