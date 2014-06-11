<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
                // You can remove this line anytime.
                $theme->setTitle('Панель управления | ');

                // Breadcrumb template.
                $theme->breadcrumb()->setTemplate('
                <ol class="breadcrumb">
                @foreach ($crumbs as $i => $crumb)
                    @if ($i != (count($crumbs) - 1))
                    <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a></li>
                    @else
                    <li class="active">{{ $crumb["label"] }}</li>
                    @endif
                @endforeach
                </ol>
            ');
            },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {
                // You may use this event to set up your assets.
                $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.min.css');
                $theme->asset()->usePath()->add('admin', 'css/sb-admin.css');
                $theme->asset()->usePath()->add('adminstyle', 'css/style.css');
                $theme->asset()->usePath()->add('awesome', 'font-awesome/css/font-awesome.min.css');
                $theme->asset()->usePath()->add('chosen', 'css/chosen.min.css');
                $theme->asset()->add('morris', 'http://cdn.oesmith.co.uk/morris-0.4.3.min.css');

                $theme->asset()->add('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
                $theme->asset()->usePath()->add('core', 'js/bootstrap.min.js');
//            $theme->asset()->add('morris', 'http://cdn.oesmith.co.uk/morris-0.4.3.min.js');
//            $theme->asset()->usePath()->add('morris-chart', 'js/morris/chart-data-morris.js');
                $theme->asset()->usePath()->add('tablesorter', 'js/tablesorter/jquery.tablesorter.js');
                $theme->asset()->usePath()->add('tables', 'js/tablesorter/tables.js');
                $theme->asset()->usePath()->add('chosenjs', 'js/chosen.jquery.min.js');
                $theme->asset()->usePath()->add('addnew', 'js/addNew.js');
                $theme->asset()->add('ajax/upload', '/themes/default/assets/js/ajax/upload.js');


                // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', array('jquery'));

                // Partial composer.
                // $theme->partialComposer('header', function($view)
                // {
                //     $view->with('auth', Auth::user());
                // });
            },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function ($theme) {
                    // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
                }

        )

    )

);