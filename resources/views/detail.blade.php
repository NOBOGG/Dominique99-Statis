@extends('layouts/mainlayout')
@section('title', 'Menu Detail')

@section('content')

    <div class="container fontAll " >
        <div class="row mx-auto">
            <div class="col-lg-3 col-md-5 col-sm-12 text-center">
                <img class="imgDetail img-fluid" src="/{{ $detailMenu['fotoMakanan'] }}" alt="">
            </div>
            <div class="col-lg-9 col-md-7 col-sm-12 mt-3">
                <h2 class="fw-bold" style="color: #ad12c8">{{ $detailMenu['namaMenu'] }}</h2>
                <h4 class="d-flex">Categories :<p  style="color: #ad12c8"> &nbsp;{{$detailMenu['kategori']}}</p></h4>
                <h3>{{ $detailMenu['deskripsi'] }}</h3>
            </div>
        </div>
        <div class="mt-3 mb-4">
            <h2 class="fw-bold text-center" style="color: #ad12c8">Find out more {{ $detailMenu['kategori'] }}</h2>
            <div class="row d-flex justify-content-center" >
                @foreach ($listMenu as $item)
                @if ($item['id']!=$detailMenu['id'] && $item['kategori']==$detailMenu['kategori'])
                    <div class="card col-lg-3 col-md-3 col-sm-12 text-center" >
                        <div class="img-wrapper img-fluid"><img src="/{{$item['fotoMakanan']}}" class="d-block w-100"
                                alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$item['namaMenu']}}</h5>
                            
                            <a href="/detail/{{ $item['id'] }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
            
        </div>
    </div>

@endsection
