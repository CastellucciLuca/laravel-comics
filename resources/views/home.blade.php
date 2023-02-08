@extends('layouts.app')

@section('main-app')
<main id="comics">
    <section id="comics-card" class="position-relative container">

        <div class="title-series-section">
            <h2 class="fs-3 m-0">Current Series</h2>
        </div>
        
        <div class="text-light pt-5">
            <div class="row row-cols-6">
                @foreach ($comicsList as $comic)
                <div class="col">
                    <div class="img-container">
                        <img src="{{$comic['thumb']}}" alt="" class="h-100 w-100">
                    </div>
                    <h3 class="fs-6 fw-bold text-uppercase">
                        {{$comic['series']}}
                    </h3>
                </div>
                @endforeach
                <button class="btn btn-primary m-auto mb-5">Load More</button>
            </div>
        </div>
        
    </section>
</main>
@endsection