@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
    <form method="POST" action="/kurikulum/create">@csrf
        <h5 class="card-title">Kurikulum - Create</h5>
        <div style="max-height: 60vh; overflow-y:auto;">
            <div class="card-text me-3">
                <div class="py-2">
                    <label for="inputNamaKurikulum">Nama Kurikulum</label>
                    <input type="text" class="form-control" id="inputNamaKurikulum" name="namaKurikulum">
                </div>
            </div>
        </div>
        <div class="float-end mt-4 mb-3 me-3">
            <a class="btn btn-outline-danger" href="/kurikulum">Cancel</a>
            <button class="btn btn-success" type="submit">Create</button>
        </div>
        </form>
    @include('sections.cardClose')
@endsection