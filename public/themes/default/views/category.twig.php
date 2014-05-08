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
        <ul class="pagination">
            <li class="disabled"><a href="#">&laquo; Пред.</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">След. &raquo;</a></li>
        </ul>
    </div>
    <br/>
</div>
</div>