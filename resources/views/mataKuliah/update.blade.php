@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/mataKuliah/style.css">   
@endsection

@section('body')
<div class="card container" style="margin-top: 8rem; width: 50rem; height: 25rem;">
    <div class="card-body">
        <h5 class="card-title">SKS<br>Mata Kuliah - Edit</h5>
        <form method="POST" action="/mataKuliah/update">
            <div class="py-2">
                <label for="updateMatkul">Mata Kuliah</label>
                    <select id="updateMatkul" name="MataKuliah" class="form-select" aria-label="Default select example">
                        <option selected hidden> </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
            </div>
            <div class="py-2">
                <h6>Dosen</h6>
                    <select class="form-select" aria-label="Default select example">
                        <option selected hidden> </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
            </div>
            <div class="py-2 sks" style="width: 10%;">
                <h6>SKS</h6>
                    <select class="form-select" aria-label="Default select example">
                        <option selected hidden> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
            </div>
            <div class="float-end mt-4 mb-3 me-1">
                <a class="btn btn-outline-danger" href="/paketKurikulum">Cancel</a>
                <button class="btn btn-success" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript" src="js/mataKuliah/script.js"></script>
@endsection