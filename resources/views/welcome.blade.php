@extends('app-layout')

@section('header')
<!-- header -->
{{-- <header class="header text-cen" style=" background-image: url({{asset("images/photography.jpg")}});height:70%;width:80%"> --}}
<div class="header-text">
    <h1>Victor Blog</h1>
    <h4>Dashboard of verified news...</h4>
</div>
<div class="overlay"></div>
{{-- </header>  --}}

@endsection

@section('main')
<!-- main -->

<section class="cards-blog latest-blog">
    @forelse($posts as $post)
    <div class="card-blog-content">
        @auth
        @if (auth()->user()->id === $post->user->id)
        <div class="post-buttons">
            <a href="{{ route('post.edit', $post) }}">Edit</a>
            <form action="{{ route('post.destroy', $post) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value=" Delete">
            </form>
        </div>
        @endif
        @endauth
        <img src="{{ asset($post->imagePath) }}" alt="" />
        <p>
            {{ $post->created_at->diffForHumans() }}
            <span>Written By {{ $post->user->name }}</span>
        </p>
        <h4>
            <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
        </h4>
    </div>
    @empty
    <p>Sorry, currently there is no blog post related to that search!</p>
    @endforelse

</section>
<!-- pagination -->

{{ $posts->links('pagination::default') }}

<br>

@endsection
