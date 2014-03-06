(function( $ ){

    $.fn.myModal = function( options ) {

        var settings = {
            'youtube' : '',
            'title' : '',
            'html': ''
        };

        if ( options ) {
            $.extend( settings, options ); // при этом важен порядок совмещения
        }


        var overlay = $('.overlay');
        if(overlay.length == 0) {
            overlay = $('<div/>').addClass('overlay').html("asd");
            overlay.appendTo('body');
        }
        overlay.html("");
        overlay.fadeIn();

        var modal = $('<div/>').addClass('mymodal');
        var exit = $('<a/>').attr('href', '#').addClass('exit').appendTo(modal);
        $(document).on('click', 'a.exit', function(e) {
            e.preventDefault();
            overlay.fadeOut();
            overlay.html("");
        });
        if(settings.title != '') {
            var header = $('<header/>').text(settings.title).appendTo(modal);
        }
        if(settings.youtube != '') {
            settings.youtube = decodeURI(settings.youtube);
            var section = $('<section/>').append('<iframe width="640" height="390" src="//www.youtube.com/embed/'+settings.youtube+'" frameborder="0" allowfullscreen></iframe>').appendTo(modal);
        }
        if(settings.html != '') {
            modal.addClass(settings.html);
            var section = $('<section/>').append($("#"+settings.html).html()).appendTo(modal);
        }


        overlay.append(modal);
//        $('.mymodal').css("top", ($(window).height() - $('.mymodal').outerHeight()) / 2 + $(window).scrollTop() + "px");
        $('.mymodal').css("left", ($(window).width() - $('.mymodal').outerWidth()) / 2 + $(window).scrollLeft() + "px");
    };
})( jQuery );

/*
 <div class="mymodal">
 <a class="exit" href="#">x</a>
 <header>
 Трейлер: asd
 </header>
 <section class="content">
 <iframe width="640" height="390" src="//www.youtube.com/embed/jZy-S2QVYaU" frameborder="0" allowfullscreen></iframe>
 </section>
 </div>
 */

$(function() {

    $(document).on('click', 'a', function(e) {
        if($(this).data('html') != undefined) {
            $(this).myModal({
                html: $(this).data('html')
            });
    }
    if($(this).data('youtube') != undefined) {
        $(this).myModal({
            youtube: $(this).data('youtube'),
            title: $(this).attr('title')
        });
        e.preventDefault();
    }
});
});