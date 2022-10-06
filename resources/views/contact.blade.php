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
            <form enctype="multipart/form-data" action={{ route('contact/submit') }} method="POST" class="contact__form">
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
                <div class="contact__form--input  d-flex flex-a-center flex-row">
                    <label class="@error('image')  unvalidated-input @enderror" for="inputImage">Upload image <ion-icon
                            name="cloud-upload-outline"></ion-icon></label>
                    <div class="name-file ">
                    </div>
                    <input id="inputImage" type="file" name="image">
                    @error('image')
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
            <div class="contact__table ">
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
                            <div class="contact__table-wrapper-header--item">Image</div>
                            <div class="contact__table-wrapper-header--item">Action</div>
                        </div>
                        <div class="contact__table-wrapper-container-body">
                            @foreach ($contact as $c)
                                <div class="contact__table-wrapper-body">
                                    <div class="contact__table-wrapper-body--item">{{ $c->name }}</div>
                                    <div class="contact__table-wrapper-body--item">{{ $c->email }}</div>
                                    <div class="contact__table-wrapper-body--item">{{ $c->message }}</div>
                                    <div class="contact__table-wrapper-body--item">
                                        <ion-icon name="images-outline" class="btn-show-img"
                                            onclick="imgValue({{ $c->id }})"></ion-icon>
                                    </div>
                                    <div class="contact__table-wrapper-body--action">
                                        <div class="action-container">
                                            <ion-icon class="action-btn" name="ellipsis-vertical-outline"></ion-icon>
                                            <div class="action-box">
                                                <a href='contact/delete/{{ $c->id }}'
                                                    class="contact__table-wrapper-body--action-trash">
                                                    <ion-icon name="trash"></ion-icon> Hapus
                                                </a>
                                                <a class="contact__table-wrapper-body--action-edit btn-show-edit"
                                                    onClick="editValueFunction({{ $c->id }})">
                                                    <ion-icon name="create"></ion-icon> Edit
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- isi value untuk edit --}}
                                <input type="hidden" class="idValue{{ $c->id }}" value="{{ $c->id }}">
                                <input type="hidden" class="nameValue{{ $c->id }}" value="{{ $c->name }}">
                                <input type="hidden" class="emailValue{{ $c->id }}"
                                    value="{{ $c->email }}">
                                <input type="hidden" class="messageValue{{ $c->id }}"
                                    value="{{ $c->message }}">
                                <input type="hidden" class="imageValue{{ $c->id }}"
                                    value='{{ $c->image }}'>
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
                        <form enctype="multipart/form-data" action={{ route('contact/edit') }}
                            class="contact-edit__box--wrapper__form" method="POST">
                            {{ csrf_field() }}

                            <div class="contact-edit__box--wrapper__form--input ">
                                <input type="hidden" name="editId" class="editId">
                                <input type="text" name="editName" class="editName">
                            </div>
                            <div class="contact-edit__box--wrapper__form--input ">
                                <input type="text" name="editEmail" class="editEmail">
                            </div>
                            <div class="contact-edit__box--wrapper__form--input d-flex gap-1 flex-a-center ">
                                <label class=" d-flex flex-a-center" for="inputImage">Upload image
                                    <ion-icon name="cloud-upload-outline"></ion-icon>
                                </label>
                                <div class="name-file ">
                                </div>
                                <input id="inputImage" type="file" required class="d-none" name="editImage">
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

        <div class="contact-img">
            <div class="contact-img-wrapper">
                <div class="contact-img-wrapper-header">
                    <p>Uploaded Image</p>
                    <p>
                        <ion-icon class="btn-close-img" name="close-circle-outline"></ion-icon>
                    </p>
                </div>
                <div class="contact-img-wrapper-content">
                    <div class="contact-img-wrapper-content-img"></div>
                </div>
            </div>
        </div>


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
            $('.editImage').val($('.imageValue' + $id).val())
            $('.name-file').html()
        }

        function imgValue(id) {
            let folder = `./upload_img/`
            $('.contact-img-wrapper-content-img').css('background', `url(${folder}${$(`.imageValue${id}`).val()})`)
        }

        $('.contact__form--input input , .contact__form--input textarea').on('keyup', function() {
            if ($(this).val()) {
                $(this).removeClass('unvalidated-input')
            } else if ($(this).val(null)) {
                $(this).addClass('unvalidated-input')
            }
        })

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



        function contactModal(name) {
            $(`.btn-show-${name}`).on('click', function() {
                $(`.contact-${name}`).addClass('show')

            })
            $(`.btn-close-${name}`).on('click', function() {
                $(`.contact-${name}`).removeClass('show')
                $('.name-file').html('')
            })

        }
        contactModal('edit');
        contactModal('img');



        // $('.contact-edit').children('#inputImage').on('change', function(e) {
        //     let file = e.target.files[0].name;
        //     $('.name-file').html(`<ion-icon name="document-outline"></ion-icon><p>${file}</p>`)
        // })


        $(document).on('click', '.action-btn', function() {
            if (!$(this).siblings('.action-box').hasClass('show')) {
                $('.action-box').removeClass('show');
            }
            $(this).siblings('.action-box').toggleClass('show');
        });
    </script>
@endsection
