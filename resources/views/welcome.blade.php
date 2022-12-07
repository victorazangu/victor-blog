@extends('layout')

@section('header')
    {{--  <!-- header -->
    <header class="header text-cen" style=" background-image: url({{asset("images/photography.jpg")}});height:70%;width:80%">
      <div class="header-text">
        <h1>Victor Blog</h1>
        <h4>Dashboard of verified news...</h4>
      </div>
      <div class="overlay"></div>
    </header>  --}}

@endsection

@section('main')
    {{--  <!-- main -->
    <main class="container">
      <h2 class="header-title">Latest Blog Posts</h2>
      <section class="cards-blog latest-blog">
        @foreach ($posts as $post )
        <div class="card-blog-content">
         <a href="{{route('post.show', $post)}}"><h1 class="text-center">{{$post->title}}</h1?</a>
         <img src="{{asset($post->imagePath)}}" alt="" class="width:60%" />
         <p>{{ $post->description }}</p>
         <p>
           {{$post->created_at->diffForHumans()}}
           <span>Written By {{$post->user->name}}</span>
         </p>
         <h4>

         </h4>
       </div>
        @endforeach
      </section>
    </main>  --}}

    <section id="about" class="about-section section-padding bd-bottom" data-scroll-index="1">
        @foreach ($posts as $post )
        <div class="row">
            <div class="col">
                <div class="card  " style="background-color: #292929;color:#999;border:1px solid #cba982">
                    <img class="card-img-top" src="{{asset($post->imagePath)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="{{ route('post.show',$post) }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </section>
@endsection
