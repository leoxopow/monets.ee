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
                        <label for="parent_cat">Новая категория</label>
                        <select name="parent_cat" id="parent_cat" class="form-control">
                            <option value="0">Родительская категория</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>