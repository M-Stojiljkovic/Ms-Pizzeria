$(document).ready(function () {
    // Inicijalizacija Tooltip-a
    $('[data-toggle="tooltip"]').tooltip();

    // Blagi scroll za sve linkove u navbaru i footeru
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        if (this.hash !== "") {

            event.preventDefault();
            var hash = this.hash;

            // Koristimo jQuery funkciju animate() za glatko pomeranje na scroll
            // Broj (900) odredjuje broj milisekundi potrebnih za skrolovanje do odredjene oblasti
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // Kraj if statement-a
    });
        
    // Slide Animacija
    $(".slideanimate").each(function () {
        $(this).stop().delay(1000).addClass("slide");
    });

    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;
            var pos2 = $('.del_box').offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
            if (pos2 < winTop + 700) {
                $('.car_box').addClass("fadeInLeft");
            }
        });
    });
    
    window.onscroll = function () {
        Logo_Shrink()
    };

    function mediaq(x) {
        if (x.matches) {
            logo.style.width = '155px';
            logo.style.height = '115px';
            logo.style.top = '2px';
        } else {
            logo.style.width = '185px';
            logo.style.height = '145px';
            logo.style.top = '12px';
        }
    }

    var x = window.matchMedia("(max-width: 1200px)")
    mediaq(x)
    x.addListener(mediaq)

    function Logo_Shrink() {
        var mediaQuery = window.matchMedia('(max-width: 1000px)')
        var logo = document.getElementById("logo")
        var nbar = document.getElementById("myNavbar")
        if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
            logo.style.width = '120px';
            logo.style.height = '90px';
            logo.style.top = '4px';
            nbar.style.height = "400px";

        } else if (mediaQuery.matches) {
            logo.style.width = '155px';
            logo.style.height = '115px';
            logo.style.top = '2px';
        } else {
            logo.style.width = '185px';
            logo.style.height = '145px';
            logo.style.top = '12px';
        }

    }

    if (sessionStorage.getItem('.error') !== 'true') {
        document.getElementsByClassName(".error").style.display = 'block';
    } else {
        document.getElementsByClassName('.error').style.display = "none";
    }

    sessionStorage.setItem('.error', 'true');


});

// Sign up i Sign in JS funkcije

function sign_up() {
    var inputs = document.querySelectorAll('.input_form_sign');
    document.querySelectorAll('.ul_tabs > li')[0].className = "";
    document.querySelectorAll('.ul_tabs > li')[1].className = "active";

    for (var i = 0; i < inputs.length; i++) {
        if (i == 2) {

        } else {
            document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
        }
    }

    setTimeout(function () {
        for (var d = 0; d < inputs.length; d++) {
            document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block active_inp";
        }


    }, 100);
    document.querySelector('.link_forgot_pass').style.opacity = "0";
    document.querySelector('.link_forgot_pass').style.top = "-5px";
    document.querySelector('.btn_sign').innerHTML = "SIGN UP";
    setTimeout(function () {

        document.querySelector('.terms_and_cons').style.opacity = "1";
        document.querySelector('.terms_and_cons').style.top = "5px";

    }, 500);
    setTimeout(function () {
        document.querySelector('.link_forgot_pass').className = "link_forgot_pass d_none";
        document.querySelector('.terms_and_cons').className = "terms_and_cons d_block";
    }, 450);

}



function sign_in() {
    var inputs = document.querySelectorAll('.input_form_sign');
    document.querySelectorAll('.ul_tabs > li')[0].className = "active";
    document.querySelectorAll('.ul_tabs > li')[1].className = "";

    for (var i = 0; i < inputs.length; i++) {
        switch (i) {
            case 1:
                console.log(inputs[i].name);
                break;
            case 2:
                console.log(inputs[i].name);
            default:
                document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
        }
    }

    setTimeout(function () {
        for (var d = 0; d < inputs.length; d++) {
            switch (d) {
                case 1:
                    console.log(inputs[d].name);
                    break;
                case 2:
                    console.log(inputs[d].name);

                default:
                    document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block";
                    document.querySelectorAll('.input_form_sign')[2].className = "input_form_sign d_block active_inp";

            }
        }
    }, 100);

    document.querySelector('.terms_and_cons').style.opacity = "0";
    document.querySelector('.terms_and_cons').style.top = "-5px";

    setTimeout(function () {
        document.querySelector('.terms_and_cons').className = "terms_and_cons d_none";
        document.querySelector('.link_forgot_pass').className = "link_forgot_pass d_block";

    }, 500);

    setTimeout(function () {

        document.querySelector('.link_forgot_pass').style.opacity = "1";
        document.querySelector('.link_forgot_pass').style.top = "5px";


        for (var d = 0; d < inputs.length; d++) {

            switch (d) {
                case 1:
                    console.log(inputs[d].name);
                    break;
                case 2:
                    console.log(inputs[d].name);

                    break;
                default:
                    document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign";
            }
        }
    }, 1500);
    document.querySelector('.btn_sign').innerHTML = "SIGN IN";
}


window.onload = function () {
    document.querySelector('.cont_centrar').className = "cont_centrar cent_active";

}

// Brojac za About sekciju
$('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
});

