<footer>
    <div class="container pt-5 pb-5 text-white">
        <div class="row align-items-center pt-5 pb-5">
            <div class="col-lg-5 col-md-5 col-sm-12 mt-4 mb-4">
                <img src="img/logo-white.png" alt="logo" class="img-fluid mb-5">
                <p>
                    Lorem Ipsum  No. 7890<br>
                    Lorem Ipsum C.P. 090909<br>
                    USA
                </p>
                <p>
                    Tel. (01) 800 890 89 89
                </p>
                <p>
                    info@dotdrive.com
                </p>
                <a href="" target="_blank" class="btn btn-link"><img src="img/f-fb.png" alt="facebook" class="img-fluid"></a>
                <a href="" target="_blank" class="btn btn-link"><img src="img/f-tw.png" alt="twitter" class="img-fluid"></a>
                <a href="" target="_blank" class="btn btn-link"><img src="img/f-g.png" alt="Google +" class="img-fluid"></a>
                <a href="" target="_blank" class="btn btn-link"><img src="img/f-Be.png" alt="Behance" class="img-fluid"></a>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-center">
                <h2 class="no-divider">Contact Us!</h2>
                <form action="">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </form>
            </div>
        </div>
    </div>
    <div class="text-center text-white footer-bottom pt-2 pb-2">
        <span class="text-center">All rights reserved 2019</span>
    </div>
</footer>

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
