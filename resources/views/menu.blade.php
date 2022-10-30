@extends('layouts/mainlayout')
@section('title', 'Menu')

@section('content')

    <div class="container mt-2 fontAll">
        <h1 class="text-center mt-2 sizing">Menu</h1>

        <div class="row d-flex justify-content-center">
            @foreach ($listMenu as $item)

                <div class="card col-lg-3 col-md-3 col-sm-12 text-center mb-3 mr-2">
                    <div class="img-wrapper img-fluid"><img src="{{$item['fotoMakanan']}}" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$item['namaMenu']}}</h5>
                        <a href="/{{ $item['id'] }}" class="btn btn-primary align-self-end">Detail</a>
                    </div>
                </div>

            @endforeach
        </div>

    </div>

@endsection