<div class="container">
    <div class="col-xs-9 lk">
        <header>
            <h1>Личный кабинет</h1>
        </header>
        <section>
            <div class="col-xs-3">
                <p><img src="{{Theme.bind('user').avatar}}" alt="" class="img-responsive" /></p>
                <p><a href="{{URL.route('user.profile.edit')}}">Редактировать профиль</a></p>
            </div>
            <div class="col-xs-9 info">
                <h4>{{Theme.bind('user').first_name}} {{Theme.bind('user').last_name}}</h4>
                <p class="last_visit">Последнее посещение: сегодня 18:09</p>
                <p class="label-lk">Город</p>
                <p>{{Theme.bind('user').region}}</p>
                <p class="label-lk">Возраст</p>
                <p>{{Theme.bind('user').age}}</p>
                <p class="label-lk">Контактная почта</p>
                <p><a href="{{Theme.bind('user').username}}">{{Theme.bind('user').username}}</a></p>
                <p class="label-lk">Социальные сети</p>
                <p><a href="#">Max Denisov</a></p>
                <p class="label-lk">Предпочтения</p>
                <p><a href="#">боевик</a>, <a href="#">драма</a>, <a href="#">триллер</a>, <a href="#">комедия</a></p>
            </div>
        </section>
    </div>
</div>