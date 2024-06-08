<script>
    var lastScrollTop = 0;
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        if (scrollTop > 5) {
            $('.menu2').addClass('sticky-top-new');
            $('.menu3').addClass('sticky-top-new');
        } else {
            $('nav.menu2 ').removeClass('sticky-top-new');
            $('.menu3').removeClass('sticky-top-new');
        }
        lastScrollTop = scrollTop;
    });
</script>