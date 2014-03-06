<table class="table table-bordered">
    <p><a class="btn btn-info" href="{{ URL.route('admin.films.create') }}">Добавить новый фильм</a></p>
    <tr>
        <td>#</td>
        <td>Заголовок</td>
        <td>Оригинальный заголовок</td>
        <td>Действие</td>
    </tr>
    {% for film in films %}
    <tr>
        <td>{{ film.id }}</td>
        <td>{{ film.title }}</td>
        <td>{{ film.title_origin }}</td>
        <td>
            <a class="btn btn-primary" href="{{ URL.route('admin.films.show',film.id) }}">Просмотр</a>
            <a class="btn btn-warning" href="{{ URL.route('admin.films.edit',film.id) }}">Редактировать</a>
            {{ Form.open({'method': 'delete', 'route':{0:'admin.films.destroy', 1:film.id} }) }}
                <button type="submit" class="btn btn-danger">Удалить</button>
            {{ Form.close() }}
        </td>
    </tr>
    {% endfor %}
</table>