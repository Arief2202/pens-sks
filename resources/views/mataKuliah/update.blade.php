@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/mataKuliah/style.css">   
@endsection

@section('body')
<div class="card container" style="margin-top: 8rem; width: 50rem; height: 25rem;">
    <div class="card-body">
        <h5 class="card-title">SKS<br>Mata Kuliah - Edit</h5>
        <form>
            <div class="py-2">
                <h6>Mata Kuliah</h6>
                    <select class="form-select" aria-label="Default select example">
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
            <div class="container position-absolute" style="bottom: 3rem; right: 1rem;">
                <button class="btn btn-primary float-end" type="submit">Create</button>
                <button class="btn btn-outline-primary float-end mx-2" type="submit">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript" src="js/mataKuliah/script.js"></script>
@endsection