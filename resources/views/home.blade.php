@extends('layouts.app')

@section('page-title','Homepage')

@section('jumbotron')

    <img src="{{url('/img/jumbotron.jpg')}}" alt="">

@endsection

@section('main-content')
<section class="container">
    <div class="row row-cols-6 g-3">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="comic-img">
                <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
            </div>
            <p>{{$comic['series']}}</p>
        </div>
            
        @endforeach

    </div>
</section>

@endsection

