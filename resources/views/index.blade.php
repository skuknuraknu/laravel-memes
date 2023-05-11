<style>
    .bg-image {
        background-image: url('{{ asset('assets/images/meme.png') }}');
        background-size: 100vh;
        background-position:center center;
        background-repeat: no-repeat;
        height: 75vh;
    }
</style>
@extends('master-layout.index')
@section('title')
    Meme | Index
@endsection
