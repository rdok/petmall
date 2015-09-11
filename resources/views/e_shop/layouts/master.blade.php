<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>PetMall &middot; @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href='{!! url("vendor/bootstrap/dist/css/bootstrap.min.css") !!}' rel='stylesheet' type='text/css'/>
    <link href='{!! url("vendor/fontawesome/css/font-awesome.min.css") !!}' rel='stylesheet' type='text/css'/>
    <link href='{!! url("vendor/smartmenus/dist/css/sm-core-css.css") !!}' rel='stylesheet' type='text/css'/>
    <link href='{!! url("vendor/smartmenus/dist/css/sm-simple/sm-simple.css") !!}' rel='stylesheet' type='text/css'/>

    <link href='{!! url("e-shop/css/dropdowns.css") !!}' rel='stylesheet' type='text/css'/>
    <link href='{!! url("e-shop/css/app.css") !!}' rel='stylesheet' type='text/css'/>

    @yield('styles')

    @yield('inline-styles')

    <!--[if lt IE 9]>
    <script src='{!! url("vendor/html5shiv/dist/html5shiv.min.js") !!}'></script>
    <script src='{!! url("vendor/respond/dest/respond.min.js") !!}'></script><![endif]-->
</head>
<body>
<div class="container-fluid">

    @include('e_shop._partials.header')

    <div class="container body-content">


        @yield('content')

        <hr/>

        tttttttttttt
        @include('flash::message')
        eeeeeeeeeee

        @include('e_shop._partials.footer')
    </div>
</div>
<!-- ./container -->
<script src='{!! url("vendor/jquery/dist/jquery.min.js") !!}'></script>
<script src='{!! url("vendor/bootstrap/dist/js/bootstrap.min.js") !!}'></script>
<script src='{!! url("vendor/smartmenus/dist/jquery.smartmenus.min.js") !!}'></script>

@yield('inline-scripts')

<script>
    $(function () {
        $('#main-menu').smartmenus();
        $('#flash-overlay-modal').modal();
    });
</script>

@yield('inline-scripts')

</body>
</html>