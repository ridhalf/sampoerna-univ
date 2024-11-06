@extends('guest.main')
@section('content')
<div class="container about">
        <div class="about-bg">
        {{-- <div class="box-img">
            <img src="assets/img/pages/about/about-us.webp" alt="" />
        </div> --}}
        <div class="box-title">
            <h3 class="title">About Us</h3>
        </div>
        </div>
        <div class="about-content">
        <div class="box-content">
            <div class="about-sampoerna">
            <img src="{{ asset('storage/'.$article->image) }}" alt="" />
            <div class="about-text">
                <h3 class="title">{{ $article->title }}</h3>
                <div class="decs">
                    {!! $article->description !!}
                </div>
                
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
