<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src={{ asset('./bootstrap/js/bootstrap.main.js') }}></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>
<script type="text/javascript" src={{ asset('./datatables/js/datatables.min.js') }}></script>
<script>
    // var map = L.map('map', {
    //     zoomControl: false
    // }).setView([-7.752371, 112.696571], 13);

    // var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     minZoom: 10,
    //     maxZoom: 17,
    //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    // }).addTo(map);

    // var marker = L.marker([-7.752371, 112.696571]).addTo(map)
    //     .bindPopup('<b>Hello Guys!</b><br />Ini Adalah Rumah Saya.').openPopup();

    // var circle = L.circle([-7.752404, 112.696550], {
    //     color: 'red',
    //     fillColor: '#f03',
    //     fillOpacity: 0.5,
    //     radius: 500
    // }).addTo(map).bindPopup('Area Rumah Saya.');

    // function onMapClick(e) {
    //     popup
    //         .setLatLng(e.latlng)
    //         .setContent('You clicked the map at ' + e.latlng.toString())
    //         .openOn(map);
    // }

    // map.on('click', onMapClick);
    $(document).ready(function() {
        setTimeout(() => {
            $('.loader').addClass('hide')
        }, 2000);
    })
    $('#btn-hide-alert').on('click', function() {
        $('.alert').addClass('hide')
    })
    setTimeout(() => {
        $('.alert').addClass('hide')
    }, 4000);


    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 30) {
            $(".sidebar").addClass("shadow");
        } else {
            $(".sidebar").removeClass("shadow");
        }
    });

    $('#nav-btn-show').on('click', function() {
        $('.navbar').addClass('show-navbar')
    })
    $('.nav-btn-hide').on('click', function() {
        $('.navbar').removeClass('show-navbar')
    })

    $(window).on('click', function(e) {
        if (!$('.navbar').get(0).contains(e.target) && !$('#nav-btn-show').get(0).contains(e.target)) {
            $('.navbar').removeClass('show-navbar');
        }
    })
    $(document).ready(function() {
        activeLink('home', 'home')
        activeLink('about', 'about');
        activeLink('gallery', 'gallery');
        activeLink('contact', 'contact');

        if (!$('.about-link , .gallery-link  , .contact-link').hasClass('active-link')) {
            $('.home-link').addClass('active-link')
        }

    });


    function activeLink(url, name) {
        if (window.location.href.indexOf(`${url}`) > -1) {
            $(`.${name}-link`).addClass('active-link');
        }
    }
</script>
