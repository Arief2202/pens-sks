@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/paketKurikulum/style.css">    
@endsection

@section('body')
    <div class="text">Halaman Mata Kuliah</div>
    <div class="d-flex justify-content-end me-4">
        <a class="btn btn-primary" href="/mataKuliah/create" role="button">Tambahkan Data</a>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="js/paketKurikulum/script.js"></script>
@endsection