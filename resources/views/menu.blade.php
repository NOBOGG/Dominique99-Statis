@extends('layouts/mainlayout')
@section('title', 'Menu')

@section('content')

    <div class="container mt-2 fontAll">
        <h1 class="text-center mt-2 sizing">Menu</h1>

        <div class="row d-flex justify-content-center mb-2">
            <form action="" method="GET" class="d-flex justify-content-center">
                <button class="btn me-1" style="background: #FAC1B1" name="kat" value="Cookies">Cookies</button>
                <button class="btn me-1" style="background: #FAC1B1" name="kat" value="Cake">Cake</button>
                <button class="btn me-1" style="background: #FAC1B1" name="kat" value="Kue Tradisional">Kue Tradisional</button>
                <button class="btn me-1" style="background: #FAC1B1" name="kat" value="all">All</button>
            </form>
            @php
                $a =200;
            @endphp
            @foreach ($listMenu as $item)

                <div class="card col-lg-3 col-md-3 col-sm-12 text-center mb-3 mr-2 mt-2" data-aos="zoom-in" data-aos-delay: <?=$a?>>
                    <div class="img-wrapper img-fluid"><img src="{{$item['fotoMakanan']}}" class="d-block w-100"
                            alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$item['namaMenu']}}</h5>
                        <a href="/detail/{{ $item['id'] }}" class="btn align-self-end" style="background: #FAC1B1">Detail</a>
                    </div>
                </div>
                @php
                    $a+=200;
                @endphp
            @endforeach
        </div>

    </div>
    
@endsection