$num = $('.my-card').length;
$even = $num / 2;
$odd = ($num + 1) / 2;

$autoplay_stopped = false;

if ($num % 2 == 0) {
    $('.my-card:nth-child(' + $even + ')').addClass('active');
    $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
    $('.my-card:nth-child(' + $even + ')').next().addClass('next');
} else {
    $('.my-card:nth-child(' + $odd + ')').addClass('active');
    $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
    $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
}

$('.my-card').click(function() {

    $autoplay_stopped = true;
    console.log("Should be stopped now");

    $slide = $('.active .center').width() - 26;
    console.log($('.active').position().left);

    if ($(this).hasClass('next')) {
        $('.card-carousel').stop(false, true).animate({ left: '-=' + $slide });
    } else if ($(this).hasClass('prev')) {
        $('.card-carousel').stop(false, true).animate({ left: '+=' + $slide });
    }

    $(this).removeClass('prev next');
    $(this).siblings().removeClass('prev active next');

    $(this).addClass('active');
    $(this).prev().addClass('prev');
    $(this).next().addClass('next');
});

function autoPlay() {
    if ($autoplay_stopped == false) {
        setInterval(Play, 3000);
    }
}

$(function() {

    // Here we set how long. Each 1000 is 1 second.
    var timer = 6000;


    // Here we count to when we begin our first play

    setTimeout(sayHi, timer);

    function sayHi() {

        // If the user hasn't clicked on anything, it autoplays
        if ($autoplay_stopped === false) {

            // This is the time for when the next time it begins.

            setTimeout(sayHi, timer);

            // Get the current menu item
            $current_item = $('.my-card.active');

            $slide = $('.active .center').width() - 26;
            console.log($('.active').position().left);


            if ($($current_item).is(':last-child')) {

                console.log("Starting over");

                return;

            } else {

                if ($($current_item).next().hasClass('next')) {
                    $('.card-carousel').stop(false, true).animate({ left: '-=' + $slide });
                } else if ($($current_item).next().hasClass('prev')) {
                    $('.card-carousel').stop(false, true).animate({ left: '+=' + $slide });
                }

                $($current_item).next().removeClass('prev next');
                $($current_item).next().siblings().removeClass('prev active next');

                $($current_item).next().addClass('active');
                $($current_item).addClass('prev');
                $($current_item).next().next().addClass('next');
            }
        }
    }
});


// Keyboard nav
$('html body').keydown(function(e) {
    if (e.keyCode == 37) { // left
        $('.active').prev().trigger('click');
    } else if (e.keyCode == 39) { // right
        $('.active').next().trigger('click');
    }
});