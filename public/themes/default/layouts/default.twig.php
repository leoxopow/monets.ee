<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme.place('title') }}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{{ Theme.place('keywords') }}">
        <meta name="description" content="{{ Theme.place('description') }}">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        {{ Theme.asset().styles() }}
        <link rel="shortcut icon" type="image/x-icon" href="{{ Theme.asset.url('favicon.ico') }}">
    </head>

    <body>
    <div class="wrapper">
        {{ Theme.partial('header') }}

            {{ Theme.content() }}

        <div class="empty"></div>
    </div>

        {{ Theme.partial('footer') }}
        {{ Theme.partial('modals') }}
    {{ Theme.asset().scripts() }}

    </body>
</html>