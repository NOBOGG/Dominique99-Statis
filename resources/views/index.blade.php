@extends('layouts/mainlayout')
@section('title', 'Home')

@section('content')
    <img class="w-100 img-fluid" src="images/BannerDominique.png" alt="">

    <div class="container mt-2 fontAll">

        <h1 class="text-center mt-3 sizing">Favorite Menu</h1>
        
            <div class="row d-flex justify-content-center" >
                @foreach ($listMenu as $item)
                @if ($item['menuFavorite']==1)
                    <div class="card col-lg-3 col-md-3 col-sm-12 text-center" >
                        <div class="img-wrapper img-fluid"><img src="{{$item['fotoMakanan']}}" class="d-block w-100"
                                alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$item['namaMenu']}}</h5>
                            
                            <a href="/{{ $item['id'] }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>

        <h1 class="text-center mt-5 sizing" id="about">Our Social Media</h1>
        <div class="row d-flex justify-content-evenly" >
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                data-mc-src="b29c1f71-822c-495b-b27c-af251a68d832#instagram"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><a href="https://linktr.ee/dominique99id">
                    <img class="img-fluid" src="images/Dom_Logo.png" alt="order">
                </a></div>
        </div>

    </div>



@endsection
