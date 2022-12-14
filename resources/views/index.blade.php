@extends('layouts/mainlayout')
@section('title', 'Home')

@section('content')
    <img class="w-100 img-fluid" src="images/Banner_Dom.png" alt="">

    <div class="container mt-2 fontAll">

        <h1 class="text-center mt-3 ">Favorite Menu</h1>

        <div class="row d-flex justify-content-center">
            @foreach ($listMenu as $item)
                @if ($item['menuFavorite'] == 1)
                    <div class="card col-lg-3 col-md-3 col-sm-12 text-center">
                        <div class="img-wrapper img-fluid"><img src="{{ $item['fotoMakanan'] }}" class="d-block w-100"
                                alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['namaMenu'] }}</h5>
                            <a href="/detail/{{ $item['id'] }}" class="btn" style="background: #FAC1B1">Detail</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <h1 class="text-center mt-5 ">Our Social Media</h1>
        <div class="row d-flex justify-content-evenly">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-mc-src="b29c1f71-822c-495b-b27c-af251a68d832#instagram">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><a href="https://linktr.ee/dominique99id">
                    <img class="img-fluid ltree" src="images/linktree.png" alt="order">
                </a></div>
        </div>

        <div id=""
            style="background-image: linear-gradient(rgba(255,153,203,0), rgba(255,153,203,1); height: 200px"></div>
    </div>
    <div class="container-fluid" id="about">
        <div class="row d-flex justify-content-center" style="background: rgba(255,153,203,1);">

            <div class="row justify-content-center align-items-center pt-2 pb-2">
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <img src="images/fotochef.jpg" class="fotochef img-fluid w-75" data-aos="fade-right" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-white" data-aos="fade-left">
                    <div class="row">
                        <h1 class="text-white fw-bold fontAll" id="aboutTop">Meet The Chef</h1>
                    </div>
                    <div class="row chefnote fontAll">
                        <h4>Beatrice Nixie Zhang</h4>
                    </div>
                    <div class="row chefnote fontAll">
                        <h4>20 Tahun</h4>
                    </div>
                    <div class="row chefnote fontAll">
                        <h4>Saya merupakan Mahasiswa dari Universitas Ciputra di jurusan Culinary Business, Saya membuat
                            dominique ini karena saya suka sekali Cooking and Baking</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>




@endsection