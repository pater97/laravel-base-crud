@extends('layouts.app')

@section('content')
<section class="homepage">
    <div class="hero_image"></div>
    <section class="container-fluid card_section">
        <div class="container card_container">
            <!-- titolo blue  -->
            <div class="current_series brand_bk">
                CURRENT SERIES
            </div>
            <!-- contenirore cards -->
            <div class="row g-4">
                @foreach($comics as $comic)
                <div class="col-md-2">
                    <a href="{{route('comics.show',$comic->id)}}" class="text-decoration-none">
                    <div class="card">
                        <img src="{{$comic->thumb}}" alt="">
                        <h5>
                            {{strtoupper($comic->series)}}
                        </h5>
                    </div>
                </a>
                <a href="{{route('comics.edit', $comic->id)}}">modifica</a>
                {{-- modal --}}
                <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$comic->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete comic {{$comic->title}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    ⚡ Attenzione questa operazione non puo essere annullata!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                @endforeach
            </div>
        </div>
        <!-- bottone "load more" -->
        <div class="d-flex justify-content-around  pb-5">
            <div class="button brand_bk py-2 px-4 fw-bold">
                LOAD MORE
            </div>
            <div class="button brand_bk py-2 px-4 fw-bold button_create">
                <a href="{{route('comics.create')}}">
                    CREATE NEW
                </a>
            </div>
        </div>
    </section>
    <!-- fascia blue  -->
    <section class="blue_option container-fluid brand_bk">
        <div class="container">
            <div class="row">
                <div>
                    <img src="../../img/buy-comics-digital-comics.png" alt="dc phone">
                    <h5>
                        DIGITAL COMICS
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-merchandise.png" alt="dc phone">
                    <h5>
                        DC MERCHANDISE
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-subscriptions.png" alt="dc phone">
                    <h5>
                        SUBSCRIPTION
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-shop-locator.png" alt="dc phone">
                    <h5>
                        COMIC SHOP LOCATOR
                    </h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-subscriptions.png" alt="dc phone">
                    <h5>
                        DC POWER VISA
                    </h5>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection