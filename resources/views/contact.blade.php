@extends('index')

@section('content')
    <div class="contact">

        @if (session()->has('success'))
            <div class="alert">
                <div class="alert-success">
                    <p>
                        <ion-icon name="happy-outline"></ion-icon>
                    </p>
                    <p>Success! </p>
                    <p>{{ session('success') }}</p>
                    <p id="btn-hide-alert">
                        <ion-icon name="close-outline"></ion-icon>
                    </p>
                </div>
            </div>
        @endif

        @if (session()->has('deleted'))
            <div class="alert">
                <div class="alert-danger">
                    <p>
                        <ion-icon name="happy-outline"></ion-icon>
                    </p>
                    <p>Success! </p>
                    <p>{{ session('deleted') }}</p>
                    <p id="btn-hide-alert">
                        <ion-icon name="close-outline"></ion-icon>
                    </p>
                </div>
            </div>
        @endif
        @if (session()->has('edited'))
            <div class="alert">
                <div class="alert-edit">
                    <p>
                        <ion-icon name="happy-outline"></ion-icon>
                    </p>
                    <p>Success! </p>
                    <p>{{ session('edited') }}</p>
                    <p id="btn-hide-alert">
                        <ion-icon name="close-outline"></ion-icon>
                    </p>
                </div>
            </div>
        @endif
        <div class="contact-wrapper">
            <form action={{ route('contact/submit') }} method="POST" class="contact__form">
                {{ csrf_field() }}
                <div class="contact__form--title">
                    <div class="contact__form--title--box">
                        <p>Contact Me</p>
                        <p>Perfect Solution for digital experience</p>
                    </div>
                    <div id="btn-show-feedback">show feedback <ion-icon name="chevron-up-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="contact__form--input">
                    <input class="@error('name') unvalidated-input @enderror" placeholder="Your Name" type="text"
                        name="name" min="5">
                    @error('name')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--input">
                    <input class="@error('email') unvalidated-input @enderror" placeholder="Your Email" type="email"
                        name="email">
                    @error('email')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="contact__form--input">
                    <textarea class="@error('message') unvalidated-input @enderror" name="message"></textarea>
                    @error('message')
                        <div class="unvalidated">
                            {{ $message }}
                            <div class="unvalidated-popup">
                                <ion-icon name="information-circle-outline"></ion-icon>
                            </div>
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

        <section id="contact-table">
            <div class="contact__table">
                <div class="contact__table-box">
                    <div class="contact__table-box--title">
                        <p>List feedback</p>
                        <div id="btn-hide-feedback">
                            <ion-icon class="nav-btn-hide" name="close-circle-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="contact__table-wrapper">
                        <div class="contact__table-wrapper-header">
                            <div class="contact__table-wrapper-header--item">Name</div>
                            <div class="contact__table-wrapper-header--item">Email</div>
                            <div class="contact__table-wrapper-header--item">Message</div>
                            <div class="contact__table-wrapper-header--item">Action</div>
                        </div>
                        <div class="contact__table-wrapper-container-body">
                            @foreach ($contact as $c)
                                <div class="contact__table-wrapper-body">
                                    <div class="contact__table-wrapper-body--item">{{ $c->name }}</div>
                                    <div class="contact__table-wrapper-body--item">{{ $c->email }}</div>
                                    <div class="contact__table-wrapper-body--item">{{ $c->message }}</div>
                                    <div class="contact__table-wrapper-body--action">
                                        <a href='contact/delete/{{ $c->id }}'
                                            class="contact__table-wrapper-body--action-trash">
                                            <ion-icon name="trash"></ion-icon> Hapus
                                        </a>
                                        <a class="contact__table-wrapper-body--action-edit btn-show-edit"
                                            onClick="editValueFunction({{ $c->id }})">
                                            <ion-icon name="create"></ion-icon> Edit

                                            {{-- isi value untuk edit --}}
                                            <input type="hidden" class="idValue{{ $c->id }}"
                                                value="{{ $c->id }}">
                                            <input type="hidden" class="nameValue{{ $c->id }}"
                                                value="{{ $c->name }}">
                                            <input type="hidden" class="emailValue{{ $c->id }}"
                                                value="{{ $c->email }}">
                                            <input type="hidden" class="messageValue{{ $c->id }}"
                                                value="{{ $c->message }}">
                                        </a>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-edit">
            <div class="contact-edit">
                <div class="contact-edit__box">
                    <div class="contact-edit__box--header">
                        <p class="contact-edit__box--header__text">Edit feedback</p>
                        <p class="contact-edit__box--header__close btn-close-edit">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </p>
                    </div>
                    <div class="contact-edit__box--wrapper">
                        <form action={{ route('contact/edit') }} class="contact-edit__box--wrapper__form" method="POST">
                            {{ csrf_field() }}

                            <div class="contact-edit__box--wrapper__form--input ">
                                <input type="hidden" name="editId" class="editId">
                                <input type="text" name="editName" class="editName">
                            </div>
                            <div class="contact-edit__box--wrapper__form--input ">
                                <input type="text" name="editEmail" class="editEmail">
                            </div>
                            <div class="contact-edit__box--wrapper__form--input ">
                                <textarea type="text" name="editMessage" class="editMessage"></textarea>
                            </div>

                            <div class="contact-edit__box--wrapper-btn">
                                <button type="reset"
                                    class="contact-edit__box--wrapper-btn__cancel btn-close-edit">Cancel</button>
                                <button type="submit" class="contact-edit__box--wrapper-btn__cancel">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>
    @include('layout/footer')
@endsection
@section('js')
    <script>
        function editValueFunction($id) {
            $('.editId').val($('.idValue' + $id).val())
            $('.editName').val($('.nameValue' + $id).val())
            $('.editEmail').val($('.emailValue' + $id).val())
            $('.editMessage').val($('.messageValue' + $id).val())
        }

        $('.contact__form--input input , .contact__form--input textarea').on('keyup', function() {
            if ($(this).val()) {
                $(this).removeClass('unvalidated-input')
            } else if ($(this).val(null)) {
                $(this).addClass('unvalidated-input')
            }
        })

        var map = L.map('map', {
            zoomControl: false
        }).setView([-7.752371, 112.696571], 13);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            minZoom: 10,
            maxZoom: 17,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([-7.752371, 112.696571]).addTo(map)
            .bindPopup('<b>Hello Guys!</b><br />Ini Adalah Rumah Saya.').openPopup();

        var circle = L.circle([-7.752404, 112.696550], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(map).bindPopup('Area Rumah Saya.');

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent('You clicked the map at ' + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);

        // --------------------------------------------
        $('#btn-show-feedback').on('click', function() {
            $('.contact__table').addClass('show')
            if ($(`.contact__table`).hasClass('show')) {
                $(document).keyup(function(evt) {
                    if (evt.keyCode == 27 && !$('.contact-edit').hasClass('show')) {
                        $('.contact__table').removeClass('show');
                    }
                })
            }
            $('#btn-hide-feedback').on('click', function() {
                $('.contact__table').removeClass('show')
            })
        })

        $('#btn-hide-alert').on('click', function() {
            $('.alert').addClass('hide')
        })
        setTimeout(() => {
            $('.alert').addClass('hide')
        }, 4000);



        $('.btn-show-edit').on('click', function() {
            $('.contact-edit').addClass('show')
        })

        $('.btn-close-edit').on('click', function() {
            $('.contact-edit').removeClass('show')
        })
    </script>
@endsection
