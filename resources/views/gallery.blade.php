@extends('index')
@include('layout/sidebar')
@section('content')
    <div class="gallery">
        <div class="gallery__title">
            <div class="gallery__title--box">
                <p>My Latest Works</p>
                <p>Perfect Solution for digital experience</p>
            </div>
            <a href="#" class="gallery__title--more">Explore More Works</a>
        </div>
        <div class="gallery__box">
            <div class="gallery__box--item ">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img5.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
            <div class="gallery__box--item">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img1.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
            <div class="gallery__box--item">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img2.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
            <div class="gallery__box--item">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img4.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
            <div class="gallery__box--item">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img4.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
            <div class="gallery__box--item">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img2.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
            <div class="gallery__box--item">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img3.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
            <div class="gallery__box--item">
                <div class="gallery__box--item__img">
                    <img src={{ asset('./img/img5.jpg') }}>
                    <div class="gallery__box--item__img--text">
                        <p>Title Project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout/footer')
@endsection
@section('js')
    <script>
        let item = '.gallery__box--item';
        $(window).on('click', '.gallery__box--item', function(e) {
            if ($(this).get(0).contains(e.target)) {
                $(this).addClass('show-photo')

            } else {
                $(this).removeClass('show-photo')
            }
        })


        $(document).on('click', '.gallery__box--item', function() {
            $(this).siblings('.gallery__box--item__img--text').addClass('opacity')
        })
    </script>
@endsection
