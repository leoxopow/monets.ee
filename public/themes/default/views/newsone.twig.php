<div class="container clearfix">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        <h4>{{ news.title }}</h4>
        {% if(Theme.bind('user').id)==1 %}
            <div class="btn-group">
                <a href="#edit_news" data-toggle="modal" class="btn btn-warning">Редактировать новость <span class="glyphicon glyphicon-edit"></span></a>
                
            </div>
        {% endif %}
        <div class="text-center">
            {{ news.thumbnail }}
            <br/>
        </div>
        {{ news.news_content }}

    </div>

</div>
{% if(Theme.bind('user').id)==1 %}
    <div id="edit_news" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <form action="/edit_news/{{ news.id }}" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" id="title" value="{{ news.title }}">
                        </div>
                        <textarea name="news_content" id="news_content" cols="30" rows="10">{{ news.news_content }}</textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">Редактировать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endif %}