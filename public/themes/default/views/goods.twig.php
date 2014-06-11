<div class="container clearfix">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        <div class="clearfix mb40">
            <div class="col-md-7 col-xs-7 pl0 pr0">
                {% if(Theme.bind('user').id)==1 %}
                    <div class="posa_btns">
                        <form action="/delete_goods" method="post">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_goods"><span
                                            class="glyphicon glyphicon-pencil"></span></button>
                                <input name="goodsId" type="hidden" value="{{ goods.id }}" >
                                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                        </form>
                    </div>
                {% endif %}
                <div class="photo_product">
                    <img src="/uploads/{{ goods.thumb }}" alt="">
                    <a class="zoom" href="#"></a>
                </div>
                <div class="shadow_product"></div>
            </div>
            <!--Thumbs monets-->
            <div class="col-md-5 col-xs-5">
                <div class="col-md-6 col-xs-6">
                    <div class="preview"><a href="#"><img src="images/lil_monet.png" alt=""/></a></div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="preview"><a href="#"><img src="images/monet-lil2.png" alt=""/></a></div>
                </div>
            </div>
            <!--Thumb monets end-->
        </div>
        <div class="clearfix mb20">
            <div class="col-md-7 col-xs-7 bdr pl0">
                <h2>{{ goods.title }}</h2>

                <div class="price_big">{{ goods.price }} <span>руб.</span></div>
                <form class="good-form" action="" method="post">
                    <input name="good_id" id="good_id" type="hidden" value="{{ goods.id }}">
                    <button class="btn btn-default" type="submit">Купить</button>
                </form>
            </div>
            <div class="col-md-5 col-xs-5 description">
            </div>
        </div>
        <div class="description mb40">
            <div class="bd-strip"></div>
            {{ goods.description }}
            <div class="bd-strip"></div>
        </div>
        <h4>ПОХОЖИЕ ТОВАРЫ:</h4>
        <table class="relative_goods">
            <tr>
                <td><a href="#">Монеты Елизаветы</a></td>
                <td>&rarr;</td>
                <td><a href="#">5 копеек 1762 года</a></td>
            </tr>
            <tr>
                <td><a href="#">Монеты Елизаветы</a></td>
                <td>&rarr;</td>
                <td><a href="#">5 копеек 1762 года</a></td>
            </tr>
            <tr>
                <td><a href="#">Монеты Елизаветы</a></td>
                <td>&rarr;</td>
                <td><a href="#">5 копеек 1762 года</a></td>
            </tr>
            <tr>
                <td><a href="#">Монеты Петра I</a></td>
                <td>&rarr;</td>
                <td><a href="#">5 копеек 1762 года</a></td>
            </tr>
        </table>
    </div>
    <!--END content-->
</div>
{% if(Theme.bind('user').id)==1 %}
    <div id="edit_goods" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <form action="/updategoods/{{ goods.id }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="good_title">Название товара</label>
                            <input class="form-control" type="text" name="title" id="good_title"
                                   value="{{ goods.title }}">
                        </div>
                        <div class="form-group">
                            <label for="good_price">Цена</label>
                            <input class="form-control" type="text" name="price" id="good_price"
                                   value="{{ goods.price }}">
                        </div>
                        <div class="form-group">
                            <label for="parent_cat">Выбор категории</label>
                            <select name="cat" id="parent_cat" class="form-control" multiple>
                                {% for category in Theme.bind('cat') %}
                                    <option value="{{ category.id }}"
                                            {% if goods.inCategory(category.id) %}selected {% endif %} >{{ category.title }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <textarea name="description" id="description_textarea" cols="30"
                                  rows="10">{{ goods.description }}</textarea>
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endif %}