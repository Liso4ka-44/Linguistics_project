$(document).ready(function() {
    $("body").fadeIn(1000);


    $('#contaption__link').click(function() {

        $('.contaption__spaeks__list').toggleClass("contaption__spaeks__list__full");
        if ($(".contaption__spaeks__list").hasClass("contaption__spaeks__list__full")) {
            let elementClick = $('#cont').attr("href", "#contaption__link");
            let destination = $(elementClick).offset().top - 800;
            $('html, body').animate({ scrollTop: destination }, 1500);
            return false;
        } else {
            $('#contaption__link').attr("href", "#block1");
            let elementClick1 = $(this).attr("href");
            let destination1 = $(elementClick1).offset().top - 120;
            $('html, body').animate({ scrollTop: destination1 }, 1500);
            return false;
        }
    });

    $('.headerr__item').click(function() {
        let link = $(this).attr("href");
        let elementClick2 = link.split('#');
        if (elementClick2[1] != undefined) {
            let destination2 = $("#" + elementClick2[1]).offset().top - 110;
            $('html, body').animate({ scrollTop: destination2 }, 1500);
        } else if (link == "index.php" && window.location.href == "http://localhost/index.php") {
            let destination2 = $('body').offset().top - 110;
            $('html, body').animate({ scrollTop: destination2 }, 1500);
        } else {
            return true;
        }
        return false;
    });
});