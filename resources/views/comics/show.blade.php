@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
<section id="show_page">
    <!-- sezione con anteprima cover e jumbotron -->
    <div class="hero_image">
        <div class="container position-relative">
            <div class="card_section position-absolute">
                <div class="card postion-relative">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" />
                    <div class="comic_book position-absolute">
                        COOMIC BOOK
                    </div>
                    <div class="gallery position-absolute">
                        VIEW GALLERY
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- separatore blue4  -->
    <div class="blue_band brand_bk">
    </div>
    <!-- sezione con descrizione e barra verde del prezzo  -->
    <div class="container description d-flex py-5">
        <div class="col-md-9">
            <h1 class="blue_text">
                {{$comic->title}}
            </h1>
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <div class="green_bar">
                <div class="col-9">
                        <h5 class="px-3">
                            <span>U.S Price:</span>  {{$comic->price}}
                        </h5>
                        <h5 class="px-5">
                            <span>AVAILABLE</span>
                        </h5>
                </div>
                <div class="col-3">
                    <h5>
                        check avaliability <i class="fas fa-sort-down"></i>
                    </h5>
                </div>
            </div>
            <div class="col-12 py-3 text_descriton">
                     <p>{{$comic->description}}</p>
            </div>
        </div>
        <div class="col-3 ad">
            <h5>ADVERSIMENT</h5>
            <img src="../../img/adv.jpg" alt="">
        </div>
    </div>
    <!-- info extra con scrittori e artisti  -->
    <div class=" extra_info gray_container  container-fluid pt-4">
        <div class="container d-flex justify-content-between ">
            <div class="col-md-6 pe-3">
                <div class="talent border-bottom">
                    <h2 class="blue_text">
                        Talent
                    </h2>
                </div>
                <div class="art border-bottom d-flex justify-content-between py-2">
                    <div class="left col-3">
                        <h5 class="blue_text">
                            Art by:
                        </h5>
                    </div>
                    <div class="right col-9">
                        unavailable
                    </div>
                </div>
                <div class="writer border-bottom d-flex justify-content-between py-2">
                    <div class="left col-3">
                        <h5 class="blue_text">
                            Written by:
                        </h5>
                    </div>
                    <div class="right col-9">
                        unavailable
                    </div>
                </div>
            </div>
            <div class="col-md-6 ps-3">
                <div class="specs border-bottom">
                    <h2 class="blue_text">
                        Specs
                    </h2>
                </div>
                <div class="series border-bottom d-flex justify-content-between py-2">
                    <div class="left col-3">
                        <h5 class="blue_text">
                            Series:
                        </h5>
                    </div>
                    <div class="right col-9">
                       {{$comic->series}}
                    </div>
                </div>
                <div class="price border-bottom d-flex justify-content-between py-2">
                    <div class="left col-3">
                        <h5 class="blue_text">
                            U.S price:
                        </h5>
                    </div>
                    <div class="right col-9">
                       {{$comic->price}}
                    </div>
                </div>
                <div class="date border-bottom d-flex justify-content-between py-2">
                    <div class="left col-3">
                        <h5 class="blue_text">
                            On sale date:
                        </h5>
                    </div>
                    <div class="right col-9">
                       {{$comic->sale_date}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sezione con icone genereiche grigio chiaro  -->
    <div class="icon_band gray_container container-fluid">
        <div class="container d-flex">
            <div class="col-md-3">
                <h5>
                    DIGITAL COMICS
                </h5>
                <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="col-md-3">
                <h5>
                    SHOP DC
                </h5>
                <i class="fas fa-credit-card"></i>
            </div>
            <div class="col-md-3">
                <h5>
                    COMIC SHOP LOCATOR
                </h5>
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="col-md-3">
                <h5>
                    SUBSCRITION
                </h5>
                <i class="fas fa-tshirt"></i>
            </div>
        </div>
    </div>
</section>
@endsection