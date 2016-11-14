$(document).ready(function () {
    $("#formMain").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST"
            , url: 'mail.php'
            , data: formNm.serialize()
            , success: function (data) {
                // Вывод текста результата отправки
                $(formNm).html(data);
            }
            , error: function (jqXHR, text, error) {
                // Вывод текста ошибки отправки
                $(formNm).html(error);
            }
        });
        return false;
    });
    $('.team-member').each(function() {
        $('.team-member>p>img')
            .unwrap()
            .wrap('<div class="team-member-card">')
            .addClass('img-fluid')
            .after('<div class="email" data-toggle="modal" data-target="#feedback"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>');
        //Shit and sticks
        //If you're see this, You have to know that I was sick, drunk and alians forced me
        //Siriously, I hate WP and jQuery, I wanna write on AngularJS/ReactJS
        //So sorry for this spaghetti
    });
    
    $('#submit').addClass('btn bg-asphalt form-control');
    $('.pll-parent-menu-item').click(function() {
        $('.sub-menu').slideToggle();
    }).css({cursor: 'pointer'});
    
//    $('.navbar-toggler').hover(function() {
//        $('.navbar-toggler>i').removeClass('fa-bars').addClass('fa-times');
//    });
    
});

$(window).on('load', function() {
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 500);
});