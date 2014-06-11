<div class="container clearfix">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        <form action="/registration" method="post" id="registration">
            <div class="form-group">
                <label for="InputEmail1">Email</label>
                <input type="text" class="form-control" name="youremail" id="InputEmail" placeholder="Введите email" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="InputUsername">Логин</label>
                <input type="text" name="username" class="form-control" id="InputUsername" placeholder="Введите логин" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="InputPass">Пароль</label>
                <input type="password" name="pass" class="form-control" id="InputPass" placeholder="Введите пароль" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="ConfirmPass">Подтверждение пароля</label>
                <input type="password" name="passconf" class="form-control" id="ConfirmPass" placeholder="Подтвердите пароль" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="firstname">Имя</label>
                <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Введите имя" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="lastname">Фамилия</label>
                <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Введите фамилию" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input class="form-control" name="phone" id="phone" type="text" placeholder="Введите телефон" autocomplete="off">
            </div>
            <button class="btn btn-default btn-lg" type="submit">Зарегистрироваться</button>
        </form>
    </div>
</div>

<div class="clearfix container">
    <div class="banner-bottom"><img src="{{ Theme.asset.url('images/bottom-baner1.png') }}" alt=""><div class="title">МАГАЗИН «МОНЕТЫ»</div></div>
    <div class="banner-bottom"><img src="{{ Theme.asset.url('images/bottom-baner2.png') }}" alt=""><div class="title">МАГАЗИН «МОНЕТЫ»</div></div>
    <div class="banner-bottom"><img src="{{ Theme.asset.url('images/bottom-baner3.png') }}" alt=""><div class="title">МАГАЗИН «МОНЕТЫ»</div></div>
</div>