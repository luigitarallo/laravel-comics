@extends('layouts.app')

@section('page-title','Homepage')

@section('main-content')
<section class="container">
    <div class="row row-cols-6 g-3">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="comic-img">
                <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
            </div>
            <p>{{$comic['title']}}</p>
        </div>
            
        @endforeach

    </div>
</section>

@endsection

