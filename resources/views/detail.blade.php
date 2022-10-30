@extends('layouts/mainlayout')
@section('title', 'Menu Detail')

@section('content')

    <div class="container fontAll">
        <div class="row">
            <div class="col-3">
                <img class="imgDetail img-fluid" src="{{ $detailMenu['fotoMakanan'] }}" alt="">
            </div>
            <div class="col-9 mt-3">
                <h2 class="fw-bold">{{ $detailMenu['namaMenu'] }}</h2>
                <h3>{{ $detailMenu['deskripsi'] }}</h3>
            </div>
        </div>
    </div>

@endsection
