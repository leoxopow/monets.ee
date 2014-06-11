<div class="container">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        <h3>Заказ №{{ order.id }}</h3>
        <table class="table table-hover table-cart">
            <tr>
                <td colspan="3" class="text-center">
                    <h4 class="mb0">Товары</h4>
                </td>
            </tr>
            <tr>
                <th>Товар</th>
                <th>Название</th>
                <th>Цена</th>
            </tr>
            {% for good in goods %}
                <tr>
                    <td><a href="/goods/{{ good.id }}" class="cart_good"><img src="/uploads/{{ good.thumb }}"
                                                                              alt=""></a></td>
                    <td>{{ good.title }}</td>
                    <td>{{ good.price }} руб.</td>
                </tr>
            {% endfor %}
            <tr>
                <td colspan="3" class="text-center">
                    <h4 class="mb0">Заказчик</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Имя:</b>
                </td>
                <td colspan="2">
                    {{ order.customer }}
                </td>
            </tr>
            <tr>
                <td>
                    <b>Телефон:</b>
                </td>
                <td colspan="2">
                    {{ order.customer_phone }}
                </td>
            </tr>
            <tr>
                <td>
                    <b>E-mail:</b>
                </td>
                <td colspan="2">
                    {{ order.customer_mail }}
                </td>
            </tr>
            <tr>
                <td>
                    <b>Статус:</b>
                </td>
                <td>
                    <select id="status">
                        <option value="0" {% if order.status == 0 %} selected {% endif %}>В ожидании</option>
                        <option value="1" {% if order.status == 1 %} selected {% endif %}>В обработке</option>
                        <option value="2" {% if order.status == 2 %} selected {% endif %}>Выполнен</option>
                    </select>
                    <input name="orderNum" id="orderNum" type="hidden" value="{{ order.id }}">
                </td>
            </tr>
        </table>

    </div>
</div>