<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 30) {
            $(".sidebar").addClass("shadow");
        } else {
            $(".sidebar").removeClass("shadow");
        }
    });

    $('#nav-btn-show').on('click' , function(){
        $('.navbar').addClass('show-navbar')
    })
    $('#nav-btn-hide').on('click' , function(){
        $('.navbar').removeClass('show-navbar')
    })
</script>
