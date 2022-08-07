@extends('index')

@section('content')
    <div class="contact">
        <div class="contact-wrapper">
            <form action={{ route('submit') }} method="POST" class="contact__form">
                @csrf
                <div class="contact__form--title">
                    <div class="contact__form--title--box">
                        <p>Contact Me</p>
                        <p>Perfect Solution for digital experience</p>
                    </div>
                </div>

                <div class="contact__form--input">
                    <input class="@error('name') unvalidated-input @enderror" placeholder="Your Name" type="text"
                        name="name">
                    @error('name')
                        <div class="unvalidated">
                            {{ $message }}<ion-icon name="information-circle-outline"></ion-icon>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--input">
                    <input class="@error('email') unvalidated-input @enderror" placeholder="Your Email" type="email"
                        name="email">
                    @error('email')
                        <div class="unvalidated">
                            {{ $message }}<ion-icon name="information-circle-outline"></ion-icon>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--input">
                    <textarea class="@error('message') unvalidated-input @enderror" name="message"></textarea>
                    @error('message')
                        <div class="unvalidated">
                            {{ $message }}<ion-icon name="information-circle-outline"></ion-icon>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--submit">
                    <button type="submit" name="submit">Kirim</button>
                </div>
            </form>
            <div class="contact__map">
                <div class="contact__map--info">
                    <p>Muhammad Rifaldi</p>
                    <p>
                        <ion-icon name="man-outline"></ion-icon>Pasuruan, 18 tahun
                    </p>
                    <p>
                        <ion-icon name="locate-outline"></ion-icon>Jl Goa Jalmo, RT2/RW1 <br> Jatikauman, Cendono,
                        Purwosari
                    </p>
                    <p>
                        <ion-icon name="mail-outline"></ion-icon>Rifald84@gmail.com
                    </p>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
    @include('layout/footer')
@endsection
@section('js')
    <script>
        var map = L.map('map', {
            zoomControl: false
        }).setView([-7.752371, 112.696571], 13);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 17,
            minZoom: 10,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([-7.752371, 112.696571]).addTo(map)
            .bindPopup('<b>Hello Guys!</b><br />Ini Adalah Rumah Saya.').openPopup();

        var circle = L.circle([-7.752404, 112.696550], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(map).bindPopup('I am a circle.');

        // var polygon = L.polygon([
        //     [51.509, -0.08],
        //     [51.503, -0.06],
        //     [51.51, -0.047]
        // ]).addTo(map).bindPopup('I am a polygon.');


        // var popup = L.popup()
        //     .setLatLng([51.513, -0.09])
        //     .setContent('I am a standalone popup.')
        //     .openOn(map);

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent('You clicked the map at ' + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);
    </script>
@endsection
