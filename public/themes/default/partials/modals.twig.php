<div id="add_category" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <form action="/addcategory" method="post">
                    <div class="form-group">
                        <label for="new_cat">Новая категория</label>
                        <input type="text" name="new_cat" class="form-control" id="new_cat">
                    </div>
                    <div class="form-group">
                        <label for="parent_cat">Родительская категория</label>
                        <select name="parent_cat" id="parent_cat" class="form-control">
                            <option value="0">Родительская категория</option>
                            {% for category in Theme.bind('cat') %}
                                <option value="{{ category.id }}">{{category.title}}</option>
                            {%endfor%}
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="add_goods" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <form action="/addgoods" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="good_title">Название товара</label>
                        <input class="form-control" type="text" name="title" id="good_title">
                    </div>
                    <div class="form-group">
                        <label for="good_price">Цена</label>
                        <input class="form-control" type="text" name="price" id="good_price">
                    </div>
                    <div class="form-group">
                        <label for="parent_cat">Выбор категории</label>
                        <select name="cat" id="parent_cat" class="form-control">
                            {% for category in Theme.bind('cat') %}
                                <option value="{{ category.id }}">{{category.title}}</option>
                            {%endfor%}
                        </select>
                    </div>

                    <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                    <textarea name="description" id="description_textarea" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>

