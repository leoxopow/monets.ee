<div class="container">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        <table class="table table-hover table-cart">
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
        </table>
    </div>
</div>