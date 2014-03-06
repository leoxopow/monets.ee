<div class="container">
    <div class="col-xs-9 lk">
        <header>
            <h1>Личный кабинет</h1>
        </header>
        <section>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-xs-3">
                    <p><img src="{{Theme.bind('user').avatar}}" id="userAvatar" alt="" class="img-responsive" /></p>
                    {#<p><input name="file" id="file" type="file"/></p>#}
                    {#<input name="avatar" type="hidden"/>#}
                    <a class="btn-Upload" href="#" data-upload="true" data-thumb="#userAvatar" data-image="avatar">Выбрать</a>
                </div>
                <div class="col-xs-9 info">

                    <div class="row">
                        <div class="col-xs-6">
                            <p class="label-lk">Имя</p>
                            <p><input name="first_name" class="form-control" value="{{Theme.bind('user').first_name}}" type="text"/></p>
                        </div>
                        <div class="col-xs-6">
                            <p class="label-lk">Фамилия</p>
                            <p><input name="last_name" class="form-control" value="{{Theme.bind('user').last_name}}" type="text"/></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <p class="label-lk">Страна</p>
                            <p>
                                <select name="country" id="country">
                                    <option value="Россия">Россия</option>
                                    <option value="Украина">Украина</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-xs-4">
                            <p class="label-lk">Город</p>
                            <p>
                                <select name="city" id="country">
                                    <option value="Россия">Россия</option>
                                    <option value="Украина">Украина</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <p class="label-lk">День</p>
                            <p>
                                <select name="b[day]" id="country">
                                    {% for i in 1..31 %}
                                    <option value="{{i}}" {%if(i==Theme.bind('user').birthdays[0])%}selected{%endif%}>{{i}}</option>
                                    {% endfor %}
                                </select>
                            </p>
                        </div>
                        <div class="col-xs-4">

                            <p class="label-lk">Месяц</p>
                            <p>
                                <select name="b[month]" id="country">
                                    {% for month in Theme.bind('months') %}
                                    <option value="{{ loop.index }}" {%if(loop.index==Theme.bind('user').birthdays[1])%}selected{%endif%}>{{month}}</option>
                                    {% endfor %}
                                </select>
                            </p>
                        </div>
                        <div class="col-xs-4">
                            <p class="label-lk">Год</p>
                            <p>
                                <select name="b[year]" id="country">

                                    {% for i in 1950..2013 %}
                                    <option value="{{i}}" {%if(i==Theme.bind('user').birthdays[2])%}selected{%endif%}>{{i}}</option>
                                    {% endfor %}
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="label-lk">Контактная почта</p>
                            <p>
                                <input class="form-control" type="email" name="email" id="email" value="{{Theme.bind('user').username}}" />
                            </p>
                        </div>
                    </div>
                    <p class="label-lk">Социальные сети</p>
                    <p class="label-lk">Вы моржете привязать себя к любой социальной сети, в которой вы находитесь. <br/>Это позволит вам найти ваших друзей и делиться с ними интересными фильмами.</p>
                    <hr/>
                    <p class="label-lk">Вконтакте</p>
                    <p><a href="#"><img src="{{Theme.asset().url('img/social/vk.png')}}" alt=""/></a></p>
                    <p><input type="checkbox" name="invite[vk]" value="true" id="invite_vk"/> <label for="invite_vk">Добавлять всех найденных друзей с Вконтакте в друзья на Мувике</label></p>
                    <hr/>
                    <p class="label-lk">Facebook</p>
                    <p>
                        <a href="#"><img src="{{Theme.asset().url('img/social/facebook.png')}}" alt=""/></a>
                        <a href="#">Max Denisov</a>
                        <a class="pull-right" href="#">Выйти из аккаунта</a>
                    </p>
                    <p><input type="checkbox" name="invite[fb]" value="true" id="invite_fb"/> <label for="invite_fb">Добавлять всех найденных друзей с Facebook в друзья на Мувике</label></p>
                    <hr/>
                    <p class="label-lk">Twitter</p>
                    <p><a href="#"><img src="{{Theme.asset().url('img/social/twitter.png')}}" alt=""/></a></p>
                    <p><input type="checkbox" name="invite[twitter]" value="true" id="invite_twitter"/> <label for="invite_twitter">Добавлять всех найденных друзей с Twitter в друзья на Мувике</label></p>
                    <hr/>
                    <div class="password">
                        <p><a id="pswform" href="#">Изменить пароль</a></p>
                        <div id="pwd">
                            <p class="label-lk">Текущий пароль</p>
                            <p><input name="current" id="current" type="password"/></p>
                            <p class="label-lk">Новый пароль</p>
                            <p><input name="new" id="new" type="password"/></p>
                            <p class="label-lk">Подтверждение пароля</p>
                            <p><input name="confirm" id="confirm" type="password"/></p>
                        </div>
                    </div>
                    <button class="btn" type="submit">Сохранить</button>
                </div>
            </form>
        </section>
    </div>
</div>
