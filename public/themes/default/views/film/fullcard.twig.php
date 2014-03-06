{% import "html/data.twig" as h %}
<section class="container content fullcard">
    <div class="col-xs-8">
        <div class="row">
            <header class="page_header">
                <h1>Лента новостей</h1>
            </header>
        </div>
        <div class="row">
            <article class="col-xs-12">
                <header class="row">
                    <h2>В прокате с {{ film.release_date }}</h2>
                </header>
                <section>
                    <div class="images clearfix">
                        <img class="pull-left" src="{{ film.poster }}" alt=""/>
                        <img class="pull-left" src="{{ film.poster_big }}" alt=""/>
                        <div class="info">
                            <a class="link-bron" href="">Купить билеты</a>
                            <a href="#" class="trailer_link">Смотреть трейлер</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3><a href="#">{{ film.title }}</a></h3>
                        <p class="description">
                            {{ film.description }}
                        </p>

                        <!--Start Ticket widget-->
                        <rb:rich key="7845056d-10ec-431a-ba19-373701a269c5" xmlns:rb="http://kassa.rambler.ru"></rb:rich>
                        <!--End Ticket widget-->
                        <a href="javascript:ticketManager.hallPlanV2(292,59253,'14-01-2014-0030');">00:20</a>
                        <script type="text/javascript" src="http://s2.kassa.rl0.ru/widget/js/ticketmanager.js"></script>
                        <p><strong>Жанр:</strong> {{ h.data(film.genres) }}</p>
                        <p><strong>Режиссер:</strong> {{ h.data(film.directors) }}</p>
                        <p><strong>Сценарий:</strong> {{ h.data(film.screenwriter) }}</p>
                        <p><strong>Продюсер:</strong> {{ h.data(film.producers) }}</p>
                        <p><strong>Композитор:</strong> {{ h.data(film.composers) }}</p>
                        <p><strong>Художник:</strong> {{ h.data(film.painters) }}</p>
                        <p><strong>Монтаж:</strong> {{ h.data(film.editors) }}</p>
                    </div>
                </section>
            </article>
            <section class="col-xs-12 session">
                <h3>Выберите сеанс</h3>

                <form action="#">
                    <table class="chose">
                        <tr>
                            <td colspan="2">
                                <div class="col-xs-4">
                                    <label for="date">Дата:</label>
                                    <select name="date" id="date">
                                        {%  for date in scheclude.dates() %}
                                            <option value="{{ date }}">{{ date }}</option>
                                        {%  endfor %}
                                    </select>
                                </div>

                                <div class="col-xs-4">
                                    <label for="city">Город:</label> <select name="city" id="city">
                                        {%  for city in cities %}
                                            <option value="{{ city.cityID }}" {% if defaultCity==city.cityID %}selected{% endif %}>{{ city.name }}</option>
                                        {%  endfor %}
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="search" type="text" name="search" placeholder="Поиск кинотеатра: Название / метро / улица"/>
                                <p class="info">Пример: <span>метро Щелковская</span></p>
                            </td>
                            <td class="map">
                                <a href="#">Выбрать на карте</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p><strong>Расписание сеансов в кинотеатре «Современник»</strong></p>
                                <p>м. Щелковская, Ул, Бодбельского 23</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="t2">
                                <table>
                                    <tr>
                                        <td>Зал «Премьерный»</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Зал «Звездный»</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </form>

            </section>
        </div>
    </div>
    <div class="col-xs-3 sidebar">
        {{ Theme.partial('sidebar') }}
    </div>
</section>