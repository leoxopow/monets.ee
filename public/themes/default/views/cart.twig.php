<div class="container">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        {% if goods %}
            <table class="table table-hover table-cart">
                <tr>
                    <th>Товар</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th></th>
                </tr>
                {% for index,good in goods %}
                    <tr>
                        <td><a href="/goods/{{ good.id }}" class="cart_good"><img src="/uploads/{{ good.thumb }}"
                                                                                  alt=""></a></td>
                        <td>{{ good.title }}</td>
                        <td>{{ good.price }} руб.</td>
                        <td class="text-center">
                            <form action="/delete_from_cart" method="post">
                                <input name="number_goods" type="hidden" value="{{ index }}">
                                <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </table>
            <form id="order" action="/add_order" method="post">
                <h3>Форма заказа</h3>
                {% for  good in goods %}
                    <input name="goods[]" type="hidden" value="{{ good.id }}">
                {% endfor %}
                <div class="form-group">
                    <input class="form-control" type="text" name="your_name" id="your_name" placeholder="Ваше Имя" {% if(Theme.bind('user') != null) %} value="{{ Theme.bind('user').firstname }} {{ Theme.bind('user').lastname }}" {% endif %}>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="your_mail" id="your_name" placeholder="Ваш E-mail" {% if(Theme.bind('user') != null) %} value="{{ Theme.bind('user').email }}" {% endif %}>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="your_phone" id="your_phone" placeholder="Ваш телефон" {% if(Theme.bind('user') != null) %} value="{{ Theme.bind('user').phone }}" {% endif %}>
                </div>
                <button class="btn btn-default" type="submit">Заказать!</button>
            </form>
        {% else %}
            <h2>Вы пока не выбрали ни одного товара...</h2>
        {% endif %}

    </div>
</div>