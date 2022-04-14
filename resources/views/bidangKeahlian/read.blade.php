@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/bidangKeahlian/style.css">    
@endsection

@section('body')
    <div class="text">Halaman Bidang Keahlian</div>
    <div class="d-flex justify-content-end me-4">
        <a class="btn btn-primary" href="/bidangKeahlian/create" role="button">Tambahkan Data</a>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="js/bidangKeahlian/script.js"></script> 
@endsection
