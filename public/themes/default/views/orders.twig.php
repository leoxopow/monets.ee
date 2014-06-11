<div class="container">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        {% for order in orders %}
            <p class="{% if order.status == 0 %}bg-danger{% elseif order.status == 1 %}bg-warning{% elseif order.status == 2 %}bg-success{% endif %}"><a href="/order/{{ order.id }}">Заказ №{{ order.id }}</a></p>
        {% endfor %}
    </div>
</div>