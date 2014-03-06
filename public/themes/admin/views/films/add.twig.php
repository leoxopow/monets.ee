{% import "html/input.twig.php" as forms %}
<div class="container">
    {{ Form.open({'method':'POST','enctype':'multipart/form-data','route':'admin.films.store'}) }}
    <div class="row">
        <div class="col-xs-3">
            <h5>Постер</h5>
            <p><img src="" class="img-responsive" id="poster" alt=""/></p>
            <p>
                <a class="btn-Upload" href="#" data-upload="true" data-thumb="#poster" data-image="poster">Выбрать</a>
            </p>
        </div>
        <div class="col-xs-9">
            <h5>Широкий постер</h5>
            <p><img src="" id="poster_big" class="img-responsive" alt=""/></p>
            <p>
                <a class="btn-Upload" href="#" data-upload="true" data-thumb="#poster_big" data-image="poster_big">Выбрать</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <p>{{ forms.input('Название', 'title', null, 'text', 20) }}</p>
            <p>{{ forms.input('Оригинальное название', 'title_origin', null, 'text', 20) }}</p>
            <p>{{ forms.textarea('Описание', 'description', null, 'text', 20) }}</p>
            <p>{{ forms.input('Дата релиза (в формате "24 августа")', 'release_date', null, 'text', 20) }}</p>
            <p>{{ forms.input('ID фильма в рамблере', 'rambler_id', null, 'text', 20) }}</p>

            <p>
                {{ forms.youtube("Ролик на YouTube", 'youtube', film.youtube) }}
            </p>

            <div class="genres">
                {{ forms.cselect("Жанры", "genres", genres, film.genresId) }}
            </div>

            <div class="directors">
                {{ forms.cselect("Режиссеры", "directors", directors, film.directorId) }}
            </div>

            <div class="screenwriter">
                {{ forms.cselect("Сценаристы", "screenwriter", screenwriters, film.screenwriterId) }}
            </div>

            <div class="producers">
                {{ forms.cselect("Продюсеры", "producers", producers, film.producersId) }}
            </div>

            <div class="composers">
                {{ forms.cselect("Композиторы", "composers", composers, film.composersId) }}
            </div>

            <div class="painters">
                {{ forms.cselect("Художники", "painters", painters, film.paintersId) }}
            </div>

            <div class="editors">
                {{ forms.cselect("Монтажеры", "editors", editors, film.editorsId) }}
            </div>
            <div><br/>
                <input class="btn btn-success" type="submit" value="Добавить"/>
            </div>

        </div>
    </div>
    {{ Form.close() }}
</div>