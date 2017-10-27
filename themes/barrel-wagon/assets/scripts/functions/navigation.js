function bw_navigation() {

    $('.home-logo').on('click touch', function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop: $('.wrap.container-fluid').offset().top}, 1000);
    });

    $('a[href="#contact"]').on('click touch', function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop: $('#contact').offset().top + 80}, 1000);
    });

    $('.logo').on('click touch', function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 1000);
    });
}

bw_navigation();