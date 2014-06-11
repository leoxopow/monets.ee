    <header class="clearfix container">
        <h1 class="logo"><a href="/"><img src="{{Theme.asset().url('images/logo.png')}}" alt="Logo"></a></h1>

        <nav class="pull-left">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/news">Новости</a></li>
                <li><a href="#">Оплата</a></li>
            </ul>
        </nav>
        <nav class="pull-right">
            <ul>
                <li><a href="/cart" >Корзина <span id="cart_count">{% if Theme.bind('cart_count') %} ({{ Theme.bind('cart_count') }}) {% endif %} </span></a></li>
                <li><a href="#">Аукцион</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <!--Header Template End-->