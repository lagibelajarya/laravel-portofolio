@extends('index')
@include('layout/sidebar')
@section('content')
    <div class="about">
        <div class="about__left">
            <div class="about__left--box">
                <div class="about__left--box__icon">
                    <img src={{ asset('./img/web-programming.png') }} alt="">
                </div>
                <p class="about__left--box__text">Website Development</p>
            </div>
            <div class="about__left--box">
                <div class="about__left--box__icon">
                    <img src={{ asset('./img/smartphone.png') }} alt="">
                </div>
                <p class="about__left--box__text">Mobile Development</p>
            </div>
            <div class="about__left--box">
                <div class="about__left--box__icon">
                    <img src={{ asset('./img/touch-screen.png') }} alt="">
                </div>
                <p class="about__left--box__text">UI/UX design</p>
            </div>
        </div>
        <div class="about__right">
            <p class="about__right--title">What do I help?</p>
            <div class="about__right--desc">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing <br>
                    Possimus deserunt explicabo inventore fugit doloremque autem. <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing <br>
                    Eum sit delectus esse eaque harum laboriosam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing <br>
                    Possimus deserunt explicabo inventore fugit doloremque autem
                </p>
            </div>
            <div class="about__right--rating">
                <div class="about__right--rating__box">
                    <p>15+</p>
                    <p>Project Complete</p>
                </div>
                <div class="about__right--rating__box">
                    <p>20+</p>
                    <p>Happy clients</p>
                </div>
            </div>
        </div>
    </div>
    <div class="about__project">
        <p class="about__project--title">My Skill</p>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="about__project--item">
                        <div class="about__project--item__star">
                            &#9733;&#9733;&#9733;&#9733;&#9734;
                        </div>
                        <div class="about__project--item__text">
                            <p>JavaScript</p>
                            <p>Vanila Js,React Js</p>
                        </div>
                        <div class="about__project--item__logo">
                            <ion-icon name="logo-javascript"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="about__project--item">
                        <div class="about__project--item__star">
                            &#9733;&#9733;&#9733;&#9733;&#9734;
                        </div>
                        <div class="about__project--item__text">
                            <p>HTML5</p>
                            <p>Vanila Js,React Js</p>
                        </div>
                        <div class="about__project--item__logo">
                            <ion-icon name="logo-html5"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="about__project--item">
                        <div class="about__project--item__star">
                            &#9733;&#9733;&#9733;&#9733;&#9734;
                        </div>
                        <div class="about__project--item__text">
                            <p>CSS</p>
                            <p>Vanila Js,React Js</p>
                        </div>
                        <div class="about__project--item__logo">
                            <ion-icon name="logo-css3"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="about__project--item">
                        <div class="about__project--item__star">
                            &#9733;&#9733;&#9733;&#9733;&#9734;
                        </div>
                        <div class="about__project--item__text">
                            <p>SASS</p>
                            <p>Vanila Js,React Js</p>
                        </div>
                        <div class="about__project--item__logo">
                            <ion-icon name="logo-sass"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="about__project--item">
                        <div class="about__project--item__star">
                            &#9733;&#9733;&#9733;&#9733;&#9734;
                        </div>
                        <div class="about__project--item__text">
                            <p>REACT</p>
                            <p>Vanila Js,React Js</p>
                        </div>
                        <div class="about__project--item__logo">
                            <ion-icon name="logo-react"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="about__project--item">
                        <div class="about__project--item__star">
                            &#9733;&#9733;&#9733;&#9733;&#9734;
                        </div>
                        <div class="about__project--item__text">
                            <p>LARAVEL</p>
                            <p>Vanila Js,React Js</p>
                        </div>
                        <div class="about__project--item__logo">
                            <ion-icon name="logo-laravel"></ion-icon>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </div>
    @include('layout/footer')
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    slidesPerGroup: 3,
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                    slidesPerGroup: 2,
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
