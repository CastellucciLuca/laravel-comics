@extends('layouts.app')

@section('main-app')
<main>
    <div class="container text-light">
        <div class="row row-cols-6">
            @foreach ($comicList as $comic)
            <div class="col">
                <div class="img-container w-100 h-60">
                    <img src="{{$comic['thumb']}}" alt="" class="h-100 w-100">
                </div>
                <h3 class="fs-6 fw-bold text-uppercase">
                    {{$comic['series']}}
                </h3>
            </div>
            @endforeach
            <div class="container d-flex justify-content-between">
                    <button class="btn btn-primary">Load More</button>
                </div>
        </div>
    </div>
</main>
@endsection