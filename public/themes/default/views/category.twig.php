<div class="container clearfix">
    {{ Theme.partial('sidebar') }}
<div class="content pull-right">
    <div class="clearfix">
        <h4 class="pull-left mr15">Каталог товаров</h4>
        <div class="col-md-4 col-xs-4 bd-strip"></div>
        <div class="col-md-4 col-xs-4 pull-right text-right pr0 pl0">
            Сортировать:&nbsp;
            <select name="#" class="mini filter">
                <option value="0">по популярности</option>
                <option value="1">по цене</option>
            </select>
        </div>
    </div>
    <div class="goods clearfix">
        {% for good in goods %}
        <div class="a-goods">
            {% if(Theme.bind('user').id)==1 %}
            <div class="posa_btns">
                <form action="/delete_goods" method="post">
                    <input name="goodsId" type="hidden" value="{{ good.id }}">
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
            </div>
            {% endif %}
            <div class="thumb"><a href="/goods/{{ good.id }}"><img src="/uploads/{{ good.thumb }}" alt=""></a></div>
            <p class="text-center">{{ good.title }}</p>
            <div class="price">{{ good.price }} руб.</div>
            <form class="good-form" action="" method="post">
                <input type="hidden" value="{{ good.id }}">
                <button class="btn btn-default" type="submit">В корзину</button>
            </form>
        </div>
        {% endfor %}

    </div>
    <div class="text-center">
        {{ goods.links() }}
    </div>
    <br/>
</div>
</div>