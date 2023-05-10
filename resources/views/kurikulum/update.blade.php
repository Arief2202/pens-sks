@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
    <form method="POST" action="/nama-kurikulum/update">@csrf
        <h5 class="card-title">Kurikulum - Update</h5>
        <input type="hidden" name="idKurikulum" value="{{$kurikulum->id}}">
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">
                <div class="py-2">
                    <label for="inputNamaKurikulum">Nama Kurikulum</label>
                    <input type="text" class="form-control" id="inputNamaKurikulum" name="namaKurikulum" value="{{$kurikulum->namaKurikulum}}">
                </div>
            </div>
        </div>
        <div class="float-end mt-4 mb-3 me-3">
            <a class="btn btn-outline-secondary" href="/nama-kurikulum">Cancel</a>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
        </form>
    @include('sections.cardClose')
@endsection