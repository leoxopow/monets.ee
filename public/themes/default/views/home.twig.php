<div class="container clearfix">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        <div id="carousel-example-generic" class="carousel slide clearfix" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ Theme.asset.url('images/slide.png') }}" alt="...">
                </div>
                <div class="item">
                    <img src="{{ Theme.asset.url('images/slide.png') }}" alt="...">
                </div>
                <div class="item">
                    <img src="{{ Theme.asset.url('images/slide.png') }}" alt="...">
                </div>
            </div>
            <div class="slider_shadow"></div>
            <ol class="carousel-indicators main_indicators text-right">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

        </div>
        <div class="clearfix">
            <div class="col-md-3 col-xs-3">
                <h4 class="text-right">об интернет магазине</h4>
                <h4 class="dark text-right">«ЗОЛОТАЯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ГРИВНА»</h4>
            </div>
            <div class="col-md-9 col-xs-9 pr0">
                <p>Сайт «Золотая гривна» создан для того, чтобы помочь Вам в покупке различных монет. Он целиком посвящен коллекционированию советских и российских монет регулярного чекана, а также юбилейных монет СССР и России. Здесь Вы сможете найти интересные материалы по истории разменной монеты в СССР и России, ответы на многие вопросы о коллекционировании монет, узнаете о том, как оценивается состояние монет, как правильно их покупать.</p>
            </div>
        </div>
    </div>
</div>
<div class="container clearfix">
    <h4 class="pull-left mr15">ТОВАРЫ ИЗ КАТАЛОГА</h4>
    <div class="col-md-6 col-xs-6 bd-strip"></div>
    <div class="col-md-3 col-xs-3 text-right pull-right sorting pr0">
        Сортировать:
        <select name="#" class="mini filter">
            <option value="0">по популярности</option>
            <option value="1">по цене</option>
        </select>
    </div>
</div>
<div class="clearfix container">
    <div class="ml-31">
        {% for good in goods %}
        <div class="a-goods">
            <div class="thumb"><a href="/goods/{{ good.id }}"><img src="/uploads/{{ good.thumb }}" alt=""></a></div>
            <p class="text-center">{{ good.title }}</p>
            <div class="price">{{ good.price }} руб.</div>
            <form class="good-form" action="" method="post">
                <input value="{{ good.id }}" type="hidden">
                <button class="btn btn-default">В корзину</button>
            </form>
        </div>
        {% endfor %}
    </div>
</div>
<div class="clearfix container">
    <div class="banner-bottom"><img src="{{ Theme.asset.url('images/bottom-baner1.png') }}" alt=""><div class="title">МАГАЗИН «МОНЕТЫ»</div></div>
    <div class="banner-bottom"><img src="{{ Theme.asset.url('images/bottom-baner2.png') }}" alt=""><div class="title">МАГАЗИН «МОНЕТЫ»</div></div>
    <div class="banner-bottom"><img src="{{ Theme.asset.url('images/bottom-baner3.png') }}" alt=""><div class="title">МАГАЗИН «МОНЕТЫ»</div></div>
</div>