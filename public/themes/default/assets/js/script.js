$(document).ready(function(){
    $('.filter').customSelect();
    $('#registration').validate({
        rules:{
            youremail:{
               required : true,
               email: true
           },
           username: {
                required: true,
                minlength: 4
           },
           pass:{
               required: true,
               minlength: 5
           },
           passconf:{
               required: true,
               minlength: 5,
               equalTo: "#InputPass"
           }
        },
        messages:{
            youremail: {
                required: "Поле не заполнено или заполнено не верно",
                email: "Некорректный email"
            },
            username:{
                required: "Поле обязательно к заполнению",
                minlength: "Слишком короткий логин"
            },
            pass:{
                required: "Поле обязательно к заполнению",
                minlength: "Пароль должен содержать минимум 5 символов"
            },
            passconf:{
              required: "Поле обязательно к заполнению",
              minlength: "Пароль должен содержать минимум 5 символов",
              equalTo: "Пароли разные"
            }
        }
    });

    tinymce.init({
        selector: "textarea",
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist ist numlist "
    });
    $('.good-form').each(function(k, v){
        $(v).submit(function(){
            var goodId = $(v).children('input').val();
            $.ajax({
                type: "post",
                dataType: "json",
                url: "/addToCard",
                data: {good_id : goodId},
                success: function(data){
                    alert('ok');
                }
            });
            return false;
        });
    });
});
