@extends('layouts/mainlayout')
@section('title', 'Home')

@section('content')
    <div class="container mt-2">
        <img class="w-100 img-fluid" src="images/BannerDominique.png" alt="">

        <h1 class="text-center mt-2 sizing">Favorite Menu</h1>


        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <div class="img-wrapper"><img src="images/Dom_Logo.png" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 4</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 6</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 7</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 8</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 9</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h1 class="text-center mt-2 sizing">Our Social Media</h1>
        <div class="row d-flex justify-content-evenly">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-mc-src="b29c1f71-822c-495b-b27c-af251a68d832#instagram"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><a href="https://linktr.ee/dominique99id">
                    <img class="img-fluid" src="images/Dom_Logo.png" alt="order">
                </a></div>
        </div>

    </div>




@endsection
