@extends('layouts/mainlayout')
@section('title', 'Menu Detail')

@section('content')

    <div class="container fontAll" >
        <div class="row mx-auto">
            <div class="col-lg-3 col-md-5 col-sm-12">
                <img class="imgDetail img-fluid" src="/{{ $detailMenu['fotoMakanan'] }}" alt="">
            </div>
            <div class="col-lg-9 col-md-7 col-sm-12 mt-3">
                <h2 class="fw-bold">{{ $detailMenu['namaMenu'] }}</h2>
                <h3>{{ $detailMenu['deskripsi'] }}</h3>
            </div>
        </div>
    </div>

@endsection
