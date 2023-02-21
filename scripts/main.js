// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#services"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

if($("#banner-slider").length) {
    $("#banner-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
    });

    let percentTime;
    let tick;
    let time = .1;
    let progressBarIndex = 0;

    $('.progressBarContainer .progressBar').each(function(index) {
        var progress = "<div class='inProgress inProgress" + index + "'></div>";
        $(this).html(progress);

        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            tick = setInterval(interval, 10);
        }

        function interval() {
            if(($('#banner-slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
                progressBarIndex = $('#banner-slider .slick-track div[aria-hidden="false"]').data("slickIndex");
                startProgressbar();
            } else {
                percentTime += 1 / (time + 5);
                $('.inProgress' + progressBarIndex).css({
                    width: percentTime + "%"
                });

                if(percentTime >= 100) {
                    $('#banner-slider').slick('slickNext');
                    progressBarIndex++;

                    if(progressBarIndex > 1) {
                        progressBarIndex = 0;
                    }

                    startProgressbar();
                }
            }
        }

        function resetProgressbar() {
            $('.inProgress').css({
                width: 0 + '%'
            });

            clearInterval(tick);
        }

        startProgressbar();

        $('.banner_item').on('click', function () {
            clearInterval(tick);
            var goToThisIndex = $(this).find("span").data("slickIndex");
            $('#banner-slider').slick('slickGoTo', goToThisIndex, false);
            startProgressbar();
        });
    });
}

$('.why-us-card').on('mouseenter', function() {
    $('.why-us-card').removeClass('active');
    $(this).addClass('active');
});

$('.service-card .description').each(function() {
    let fullDescription = $(this).text();
    let truncatedDescription = fullDescription.length > 40 ? fullDescription.substring(0,40) + "..." : fullDescription;

    $(this).html(truncatedDescription);

    $(this).parents('.service-card').find('.showMoreServiceDescription').on('click',function() {
        $(this).parents('.service-card').find('.description').html(fullDescription);
    })
});
