@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <form method="POST" action="/kelas/update">@csrf
            <h5 class="card-title">Kelas - Update</h5>
            <input type="hidden" name="idKelas" value="{{$kelas->id}}">
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <div class="py-2">
                        <h6>Nama Kelas</h6>
                            <input type="text" class="form-control" name="namaKelas" value="{{$kelas->namaKelas}}">
                    </div>
                    <div class="py-2">
                        <h6>Kurikulum</h6>
                            <select name="idKurikulum" class="form-select" aria-label="Default select example">                       
                                    @foreach($kurikulum as $kuri){
                                        <option @if($kelas->kurikulum_id == $kuri->id)selected @endif value="{{$kuri['id']}}">{{$kuri['namaKurikulum']}}</option>
                                    @endforeach
                            </select>     
                    </div>
                    <div class="py-2">
                        <h6>Tingkat</h6>
                            <select name="tingkat" class="form-select" aria-label="Default select example">                       
                                    <option @if($kelas->tingkat == 1)selected @endif value="1">1</option>
                                    <option @if($kelas->tingkat == 2)selected @endif value="2">2</option>
                                    <option @if($kelas->tingkat == 3)selected @endif value="3">3</option>
                                    <option @if($kelas->tingkat == 4)selected @endif value="4">4</option>
                            </select>     
                    </div>
                    <div class="py-2">
                        <h6>Prodi</h6>
                            <select name="prodi" class="form-select" aria-label="Default select example">                       
                                    <option @if($kelas->prodi == "D3")selected @endif value="D3">D3</option>
                                    <option @if($kelas->prodi == "D4")selected @endif value="D4">D4</option>
                            </select>     
                    </div>
                    <div class="py-2">
                        <h6>Semester</h6>
                            <select name="semester" class="form-select" aria-label="Default select example">                       
                                    <option @if($kelas->semester == "Ganjil")selected @endif value="Ganjil">Ganjil</option>
                                    <option @if($kelas->semester == "Genap")selected @endif value="Genap">Genap</option>
                            </select>     
                    </div>
                    <div class="py-2 sks">
                        <h6>Tahun Ajaran</h6>
                            <input type="date" class="form-control" name="startTahunAjaran" value="{{$kelas->startTahunAjaran}}">
                    </div>                             
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="float-start mt-4 me-1">
                        <a class="btn btn-warning" href="/kelas/delete/{{$kelas->id}}">Delete</a>
                    </div>                                 
                </div>
                <div class="col">
                    <div class="float-end mt-4 me-1">
                        <a class="btn btn-outline-secondary" href="/kelas">Cancel</a>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>                       
                </div>
            </div>
        </form>
    @include('sections.cardClose')
@endsection
