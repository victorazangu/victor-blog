@extends('layout')
@section('header')
<h1 style="padding-top: 50px;">Create New Category!</h1>
<hr>
@endsection
@section('main')
<section id="about" class="about-section  section-padding bd-bottom " data-scroll-index="1">

        <div>
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <!-- name -->
                <label for="name"><span>Name</span></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" />


                <!-- Button -->
                <input type="submit" value="Submit" />
            </form>
        </div>
        <div class="create-categories">
            <a href="{{route('categories.index')}}">Categories list <span>&#8594;</span></a>
        </div>
</section>

@endsection


@endsection
