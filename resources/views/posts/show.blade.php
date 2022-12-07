@extends('layout');

@section('header')
     <div class="dl-side-content">
        <div class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </div>

        <header class="  align-items-center bd-bottom" data-scroll-index="0">
        </header>

@endsection

@section('main')
<section id="about" class="about-section section-padding bd-bottom" data-scroll-index="1">
    <h1 class="text-center post-h1">{{$post->title}}</h1>


    <div class="card  " style="background-color: #292929;color:#999;border:1px solid #cba982">

        <img class="card-img-top" src="{{ asset('img/Artboard 3.png') }}" alt="Card image cap">
        <div class="card-body">

            <p class="card-text">{{$post->body}}</p>
            <p>Published At: {{date('Y-m-d', strtotime($post->created_at))}}</p>

        </div>
    </div>
</div>

</section>
@endsection