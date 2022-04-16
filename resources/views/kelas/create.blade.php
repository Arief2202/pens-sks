@extends('layouts.main')

@section('body')
    @include('sections.cardOpen')
        <form method="POST" action="kelas/create">
            <h5 class="card-title">Kelas - Create</h5>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <div class="py-2">
                        <h6>Nama Kelas</h6>
                            <input type="text" class="form-control" name="namaKelas">
                    </div>
                    <div class="py-2">
                        <h6>Kurikulum</h6>
                            <select name="idKurikulum" class="form-select" aria-label="Default select example">
                                <option selected hidden> </option>                        
                                    @foreach($kurikulum as $kuri){
                                        <option value="{{$kuri['id']}}">{{$kuri['namaKurikulum']}}</option>
                                    @endforeach
                            </select>     
                    </div>
                    <div class="py-2">
                        <h6>Tingkat</h6>
                            <select name="tingkat" class="form-select" aria-label="Default select example">
                                <option selected hidden> </option>                        
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select>     
                    </div>
                    <div class="py-2">
                        <h6>Prodi</h6>
                            <select name="prodi" class="form-select" aria-label="Default select example">
                                <option selected hidden> </option>                        
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                            </select>     
                    </div>
                    <div class="py-2">
                        <h6>Semester</h6>
                            <select name="semester" class="form-select" aria-label="Default select example">
                                <option selected hidden> </option>                        
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
                            </select>     
                    </div>
                    <div class="py-2 sks">
                        <h6>Tahun Ajaran</h6>
                            <input type="text" class="form-control" nama="startTahunAjaran">
                    </div>                             
                </div>
            </div>
                
            <div class="float-end mt-4 mb-3 me-1">
                <a class="btn btn-outline-danger" href="/kelas">Cancel</a>
                <button class="btn btn-success" type="submit">Create</button>
            </div>   
        </form>
    @include('sections.cardClose')
@endsection
