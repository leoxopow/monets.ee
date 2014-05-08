<aside class="pull-left">
    {% if(Theme.bind('user') != null) %}
        <p>Добро пожаловать,  {{ Theme.bind('user').username }}!</p>
        <ul>
            {% if(Theme.bind('user').id)==1 %}
                <li><a href="#add_category" data-toggle="modal">Добавить категорию <span class="glyphicon glyphicon-plus-sign"></span></a></li>
                <li><a href="#add_goods" data-toggle="modal">Добавить товар <span class="glyphicon glyphicon-plus-sign"></span></a></li>
                <li><a href="/orders">Заказы <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
            {%  endif %}
        </ul>
        <p>
            <a class="btn btn-default" href="/logout">Выход</a>
        </p>
    {% else %}
        <form action="/login" method="post">
            <input type="text" name="username" id="username" class="form-control" placeholder="Логин">
            <input type="password" name="pass" id="pass" class="form-control" placeholder="Пароль">
            <div class="clearfix mb20">
                <button class="btn btn-default pull-left" type="submit">Вход</button>
                <a class="btn btn-default pull-right" href="/registration">Регистрация</a>
            </div>
        </form>
    {% endif %}

    <h4>РАЗДЕЛЫ КАТАЛОГА</h4>
    <ul class="categories">

        {% for category in Theme.bind('cat') %}
            <li>
                <a href="/category/{{ category.id }}">{{category.title}}</a>
            </li>
        {%endfor%}
    </ul>
    <form class="search" >
        <input type="text" name="search" id="search" class="form-control" placeholder="Поиск по полям карточки товара">
        <button class="btn btn-default" type="button">найти</button>
    </form>
</aside>