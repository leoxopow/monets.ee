<section class="slider">
    <div class="container">
        <div class="col-xs-12">
            <h2>Новинки</h2>

            <div class="anyClass">
                <a href="#" class="btn-prev"><<</a>
                <a href="#" class="btn-next">>></a>
                <ul>
                    {% for slide in slider %}
                        <li>
                            <div class="block-poster">
                                <div class="poster-img"><a href=""><img src="{{ slide.poster }}" class="img-responsive" alt="{{ slide.title }}"/></a></div>
                                <div class="poster-descr">
                                    <div class="poster-bg"></div>
                                    <div class="poster-body">

                                        <div class="poster-title">{{ slide.title }}</div>
                                        <div class="poster-date">Премьера: <br>{{ slide.release_date }}</div>
                                        <div class="poster-links">
                                            <a class="link-see-trailer" data-youtube="{{ slide.youtube }}" title="Трейлер: {{ slide.title }}" href="#">Смотреть трейлер</a>
                                            <a class="link-bron" href="">Купить билет</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</section>