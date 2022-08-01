@extends('index')
@include('layout/sidebar')
@section('content')
    <div class="home">
        <div class="home__hero">
            <div class="home__hero--title">
                <p class="home__hero--title-text">HI <img src={{ asset('./img/emoji.svg') }} alt=""></p>
                <p class="home__hero--title-text">I'm Rifaldi</p>
                <p class="home__hero--title-text">Frontend Developer</p>
            </div>
            <div class="home__hero--desc">
                <p class="home__hero--desc-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>
                    Commodi laudantium debitis voluptas tenetur aliquid. Inventore. <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                    Ab, nisi labore. Officiis accusantium ducimus atque.</p>
            </div>
            <div class="home__hero--btn">
                <button class="home__hero--btn-1">HIRE ME</button>
                <button class="home__hero--btn-2" onclick="document.location='/gallery'">SEE MY PROJECTS</button>
            </div>
        </div>
        <div class="home__right">
            <img src="{{ asset('img/rifal.svg') }}" alt="" class="home__right--img">
        </div>
    </div>
    @include('layout/footer')
@endsection
