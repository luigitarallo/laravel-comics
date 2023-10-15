@extends('layouts.app')

@section('page-title','Homepage')

@section('jumbotron')
<div class="jumbotron">
    <img src="{{Vite::asset('public/img/jumbotron.jpg')}}" alt="Jumbotron">
</div>
@endsection

@section('main-content')
<section class="container my-5">
    <div class="row row-cols-6 g-3">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="comic-img">
                <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
            </div>
            <p class="comic-title">{{$comic['series']}}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection


