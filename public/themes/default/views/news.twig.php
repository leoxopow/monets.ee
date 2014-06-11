<div class="container clearfix">
    {{ Theme.partial('sidebar') }}
    <div class="content pull-right">
        <h4>НОВОСТИ</h4>

        <br/>
        <div class="clearfix">
            <div>
                <div class="clearfix">
                    {% for item in news %}
                    <div class="media">
                        <a class="pull-left" href="#">
                            {{ item.thumbnail }}
                        </a>
                        <div class="media-body">
                            <h5><a href="/news-post/{{ item.id }}">{{ item.title }}</a></h5>
                            <p>{{ item.short }} <a class="morelink pull-right" href="/news-post/{{ item.id }}">далее...</a></p>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            {#<div class="col-md-7 col-xs-7 pr0">#}
                {#<ul class="nav nav-tabs">#}
                    {#<li class="active col-md-4"><a href="#last" data-toggle="tab">ПОСЛЕДНЕЕ</a></li>#}
                    {#<li class="col-md-4"><a href="#popular" data-toggle="tab">ПОПУЛЯРНОЕ</a></li>#}
                    {#<li class="col-md-4"><a href="#important" data-toggle="tab">ВАЖНЫЕ</a></li>#}
                {#</ul>#}
                {#<div class="tab-content">#}
                    {#<div class="tab-pane active" id="last">#}
                        {#<div class="date">22.01.2014</div>#}
                        {#<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem consectetur eius#}
                            {#illum magni modi neque, praesentium quaerat quod ut? <a class="morelink pull-right" href="#">подробнее...</a></p>#}
                        {#<div class="date">22.01.2014</div>#}
                        {#<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem consectetur eius#}
                            {#illum magni modi neque, praesentium quaerat quod ut? <a class="morelink pull-right" href="#">подробнее...</a></p>#}
                        {#<div class="date">22.01.2014</div>#}
                        {#<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem consectetur eius#}
                            {#illum magni modi neque, praesentium quaerat quod ut? <a class="morelink pull-right" href="#">подробнее...</a></p>#}
                        {#<div class="date">22.01.2014</div>#}
                        {#<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem consectetur eius#}
                            {#illum magni modi neque, praesentium quaerat quod ut? <a class="morelink pull-right" href="#">подробнее...</a></p>#}
                    {#</div>#}
                    {#<div class="tab-pane" id="popular">...</div>#}
                    {#<div class="tab-pane" id="important">...</div>#}
                {#</div>#}
            {#</div>#}
        </div>
    </div>
</div>