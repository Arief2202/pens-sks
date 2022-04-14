@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/kelas/style.css">    
@endsection

@section('body')
    <div class="text">Halaman Kelas</div>
    <div class="d-flex justify-content-end me-4">
        <a class="btn btn-primary" href="/kelas/create" role="button">Tambahkan Data</a>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="js/kelas/script.js"></script>
@endsection