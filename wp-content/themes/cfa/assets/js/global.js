function menu(e) {

    // Add Class to make element active, we will reset it first
    jQuery("#main-navigation ul li").removeClass("active");
    jQuery(".hero-row").addClass("main-menu-active");

    mega_menu = jQuery(".navigation-wrapper");
    // Show Wrapper
    jQuery(mega_menu).addClass("active");
}

function education_menu() {
    // Reset
    jQuery("ul#network-navigation").removeClass("active");
    jQuery("ul#counsel-navigation").removeClass("active");
    jQuery("ul#research-navigation").removeClass("active");
    mega_menu.removeClass("network");
    mega_menu.removeClass("counsel");
    mega_menu.removeClass("research");

    // Add
    mega_menu.addClass("education");
    jQuery("ul#education-navigation").addClass("active");
}

function network_menu() {
    // Reset
    jQuery("ul#education-navigation").removeClass("active");
    jQuery("ul#counsel-navigation").removeClass("active");
    jQuery("ul#research-navigation").removeClass("active");
    mega_menu.removeClass("education");
    mega_menu.removeClass("counsel");
    mega_menu.removeClass("research");

    // Add
    mega_menu.addClass("network");
    jQuery("ul#network-navigation").addClass("active");
}

function counsel_menu() {
    // Reset
    jQuery("ul#education-navigation").removeClass("active");
    jQuery("ul#network-navigation").removeClass("active");
    jQuery("ul#research-navigation").removeClass("active");
    mega_menu.removeClass("education");
    mega_menu.removeClass("network");
    mega_menu.removeClass("research");

    // Add
    mega_menu.addClass("counsel");
    jQuery("ul#counsel-navigation").addClass("active");
}

function research_menu() {
    // Reset
    jQuery("ul#education-navigation").removeClass("active");
    jQuery("ul#network-navigation").removeClass("active");
    jQuery("ul#counsel-navigation").removeClass("active");
    mega_menu.removeClass("education");
    mega_menu.removeClass("network");
    mega_menu.removeClass("counsel");

    // Add
    mega_menu.addClass("research");
    jQuery("ul#research-navigation").addClass("active");
}

function search() {
    jQuery(".search").click(function(e) {
        jQuery("#search-wrapper").addClass("active");
    });

    jQuery(".close-search").click(function(e) {
        jQuery("#search-wrapper").removeClass("active");
    });
}

function modal() {
    jQuery(".open-modal").click(function(e) {
        jQuery("#modal-window").show();
        jQuery("body").addClass("modal-active");
    });
    jQuery(".close-modal").click(function(e) {
        jQuery("#modal-window").hide();
        jQuery("body").removeClass("modal-active");
    });
}

function expand_course() {
    jQuery(".course-item .uncollapse").click(function(e) {
        jQuery(this).parent().parent().toggleClass("uncollapse");
    });
}


function book_course() {
    jQuery('.course-item .btn').click(function(e) {
        e.preventDefault();
        console.log("Click");
        var $button = $(this);

        // set ajax data
        var data = {
            'action': '',
            'post_id': $button.data('course-id')
        };

        jQuery.post(settings.ajaxurl, data, function(response) {
            console.log('ok');
        });

    });
}

jQuery(function() {

    // book_course();

    expand_course();

    search();

    modal();

    jQuery("#main-navigation ul li a").click(function(e) {
        menu(e);
        // Show Specific Menu
        if (jQuery(this).hasClass("education-menu")) {
            jQuery(this).parent().addClass("active");
            education_menu();
        }
        if (jQuery(this).hasClass("network-menu")) {
            jQuery(this).parent().addClass("active");
            network_menu();
        }
        if (jQuery(this).hasClass("counsel-menu")) {
            jQuery(this).parent().addClass("active");
            counsel_menu();
        }
        if (jQuery(this).hasClass("research-menu")) {
            jQuery(this).parent().addClass("active");
            research_menu();
        }
    });
    // Breadcrumb Path
    jQuery(".breadcrumb-menu span").click(function(e) {
        menu();
        // Show Specific Menu
        if (jQuery(this).hasClass("education-menu")) {
            education_menu();
            jQuery("#main-navigation ul li a.education-menu").parent().addClass("menu-item-active");
        }
        if (jQuery(this).hasClass("network-menu")) {
            network_menu();
            jQuery("#main-navigation ul li a.network-menu").parent().addClass("menu-item-active");
        }
        if (jQuery(this).hasClass("counsel-menu")) {
            counsel_menu();
            jQuery("#main-navigation ul li a.counsel-menu").parent().addClass("menu-item-active");
        }
        if (jQuery(this).hasClass("research-menu")) {
            research_menu();
            jQuery("#main-navigation ul li a.research-menu").parent().addClass("menu-item-active");
        }
    });
    jQuery("span.close-menu").click(function(e) {
        // Reset Menu

        jQuery(".navigation-wrapper").removeClass("active");
        jQuery(".navigation-wrapper").removeClass("education");
        jQuery(".navigation-wrapper").removeClass("network");
        jQuery(".navigation-wrapper").removeClass("counsel");
        jQuery(".navigation-wrapper").removeClass("research");


        jQuery("ul#education-navigation").removeClass("active");
        jQuery("ul#network-navigation").removeClass("active");
        jQuery("ul#counsel-navigation").removeClass("active");
        jQuery("ul#research-navigation").removeClass("active");

        jQuery("#main-navigation ul li").removeClass("menu-item-active");
        jQuery(".hero-row").removeClass("main-menu-active");
    });
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault()

        $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top,
            },
            500,
            'linear'
        )
    })
});