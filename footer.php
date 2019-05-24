<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="slick/slick.min.js" type="text/javascript"></script>
<script>
    let slick = $('.slick-init');
    slick.on('init', function () {
        let center = $('.slick-center');
        center.prev().addClass('slck-adj').prev().addClass('slck-lat');
        center.next().addClass('slck-adj').next().addClass('slck-lat');
    }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        let center = null,
            direction = '';
        if (Math.abs(nextSlide - currentSlide) == 1) {
            direction = (nextSlide - currentSlide > 0) ? "right" : "left";
        }
        else {
            direction = (nextSlide - currentSlide > 0) ? "left" : "right";
        }
        switch (direction) {
            case 'right':
                center = $('.slick-center').next();
                break;
            case 'left':
                center = $('.slick-center').prev();
                break;
        }
        $('.slck-adj').removeClass('slck-adj');
        $('.slck-lat').removeClass('slck-lat');
        center.prev().addClass('slck-adj').prev().addClass('slck-lat');
        center.next().addClass('slck-adj').next().addClass('slck-lat');
    });
    slick.slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 5,
        arrows: true,
        prevArrow: `<button class="slck-prev"><i class="fas fa-chevron-left"></i></button`,
        nextArrow: `<button class="slck-next"><i class="fas fa-chevron-right"></i></button`,
        swipe: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
</body>
</html>
