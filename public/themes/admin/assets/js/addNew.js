/**
 * Created by vinnizp on 22.11.13.
 */
(function( $ ) {
    $.fn.addNew = function(options) {

        var $this = $(this);

        var settings = $.extend({'name' : 'new'}, options);

            $this.click(function(e) {
                var name = $(this).data('name')+"[]";
                var to = $(this).data('to');
                e.preventDefault();
                var input = $("<input/>");
                input.attr('name', name);
                input.addClass('form-control');
                var cont = $('<div/>', {
                    'class': 'add-control'
                });
                cont.append(input);
                $('.'+to).append(cont);
            });

        return this;
    };
})(jQuery);