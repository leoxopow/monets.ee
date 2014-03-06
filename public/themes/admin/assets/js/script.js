$(function() {
    $('.block-poster').hover(function(){
        $(this).find('.poster-descr').fadeIn();
    },function(){
        $(this).find('.poster-descr').fadeOut();
    });

    $('article .images').hover(function(){
        $(this).find('.info').fadeIn();
    },function(){
        $(this).find('.info').fadeOut();
    });


    $('#slider').anythingSlider({
        toggleControls      : true
    });

    $("#pswform").click(function(e) {
        e.preventDefault();
        $(this).slideUp(200);
        $('#pwd').fadeIn(250);
    });

    $('form').jClever({
        applyTo: {
            select: true,
            checkbox: true,
            radio: true,
            button: true,
            file: false,
            input: false,
            textarea: false
        }
    });
});