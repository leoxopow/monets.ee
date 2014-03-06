$(function() {
    $('a').each(function(i,v) {
        if($(v).data('upload') == true) {
            $(v).uploadImage({
                'imageInput': $(v).data('image'),
                'thumb': $(v).data('thumb'),
                'error': $(v).data('error')
            });
        }
    });
});

(function( $ ){

    $.fn.uploadImage = function( options ) {
console.log($(this).data('thumb'));
        var settings = {
            'imageInput' : '',
            'thumb' : '',
            'error' : ''
        };

        if ( options ) {
            $.extend( settings, options ); // при этом важен порядок совмещения
        }
        var uploadInput = $("<input name=\"file_"+settings.imageInput+"\" type=\"file\" />")
        $(this).parent().append(uploadInput);
        var imageInput = $("<input name=\""+settings.imageInput+"\" type=\"hidden\" />")
        $(this).parent().append(imageInput);

        var thumb = $(settings.thumb),
            error = $(settings.error);

        $(document).on('change', settings.uploadInput, function(){
            // Создадим новый объект типа FormData
            var data = new FormData();
            // Добавим в новую форму файл
            data.append('file', uploadInput[0].files[0]);

            // Создадим асинхронный запрос
            $.ajax({
                // На какой URL будет послан запрос
                url: '/upload/image',
                // Тип запроса
                type: 'POST',
                // Какие данные нужно передать
                data: data,
                // Эта опция не разрешает jQuery изменять данные
                processData: false,
                // Эта опция не разрешает jQuery изменять типы данных
                contentType: false,
                // Формат данных ответа с сервера
                dataType: 'json',
                // Функция удачного ответа с сервера
                success: function(result) {
                    // Получили ответ с сервера (ответ содержится в переменной result)
                    // Если в ответе есть объект filelink
                    if (result.link) {
                        // Зададим сообтветсвующий URL нашему мини изображению
                        thumb.attr('src', result.link);
                        // Сохраним значение в input'е
                        imageInput.val(result.link);
                        // Скроем ошибку
                        error.hide();
                    } else {
                        // Выведет текст ошибки с сервера
                        error.text(result.message);
                        error.show();
                    }
                },
                // Что-то пошло не так
                error: function (result) {
                    // Ошибка на стороне сервера
                    error.text("Upload impossible");
                    error.show();
                }
            });
        });
        $(this).on('click', function(e) {
            e.preventDefault();
            var upload = $(this).parent().find('input[type=file]');
            upload.click();
        });
        $(uploadInput).hide();



    };
})( jQuery );