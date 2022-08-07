<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src={{ asset('./bootstrap/js/bootstrap.main.js') }}></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>

<script>
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
</script>
