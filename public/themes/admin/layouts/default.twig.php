<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{{ Theme.place('keywords') }}">
    <meta name="description" content="{{ Theme.place('description') }}">

    <title>{{ Theme.place('title') }}</title>

    {{ Theme.asset().styles() }}
</head>

<body>

<div id="wrapper">

    {{ Theme.partial('header') }}
<!-- Sidebar -->

    {{ Theme.content() }}

</div><!-- /#wrapper -->




{{ Theme.partial('footer') }}

{{ Theme.asset().scripts() }}
{{ Theme.asset().container('footer').scripts() }}

<script>
    $(function() {
        $('select').chosen();
        $('.add').addNew();
    });
</script>
</body>
</html>
