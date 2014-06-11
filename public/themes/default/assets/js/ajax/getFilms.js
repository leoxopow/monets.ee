$(function() {
    var click = function(e){
        e.preventDefault();
        var urll = $(this).attr('href');
        var state = {
            title: 'moovik',
            url: this.getAttribute( "href", 2 ) // двоечка нужна для ИЕ6-7
        }

        // заносим ссылку в историю
        $.ajax({
            url: urll,
            dataType:"json",
            success: function(data) {
                $('#clinks').html(data.links);
                $('#main_content').fadeOut(300, function(){
                    $('#main_content').tmpl('film', data.data);
                    $('#main_content').fadeIn(300);
                });
                $('.pagination').on('click', 'a',click);
                history.pushState( state, state.title, state.url );
            }
        });
    };
    $('.pagination').on('click', 'a',click);
//$('#main_content').tmpl('film', films);
});