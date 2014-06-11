<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>{{ film.title }} <small>/ {{ film.title_origin }}</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <img class="img-responsive" src="{{ film.poster }}" alt=""/>
        </div>
        <div class="col-xs-3">
            <img class="img-responsive" src="{{ film.poster_big }}" alt=""/>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p>Жанр: {{ film.genres }}</p>
            <p>Режиссер: {{ film.directors }}</p>
            <p>Сценарий: {{ film.screenwriter }}</p>
            <p>Продюсер: {{ film.producers }}</p>
            <p>Композитор: {{ film.composers }}</p>
            <p>Художник: {{ film.painters }}</p>
            <p>Монтаж: {{ film.editors }}</p>
        </div>
    </div>
</div>