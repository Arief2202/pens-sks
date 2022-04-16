@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/dashboard/style.css">    
@endsection

@section('body')
    <div class="text">Halaman Dashboard</div>
    <div class="d-flex justify-content-end me-4">
        <a class="btn btn-primary" href="/sksMaks/update" role="button">Edit SKS Maks</a>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="js/dashboard/script.js"></script>
@endsection