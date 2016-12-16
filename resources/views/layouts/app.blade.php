<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Feature Requests')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- My Styles -->
    <link href="/css/all.css" rel="stylesheet">

    <!-- My Scripts -->
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('2c687811e8912048037b', {
            encrypted: true
        });

        var channel = pusher.subscribe('order');
        channel.bind('PopularFeature', function(data) {
            alert(data.message);
        });
    </script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">

    @include('nav')

    @yield('content')

</div>

<!-- https://github.com/laracasts/PHP-Vars-To-Js-Transformer -->
@include ('js_vars_transformer')

<!-- Scripts -->
<script src="/js/app.js"></script>

<!-- My Scripts -->
<script src="/js/all.js"></script>

@yield('footer')

<script>
    Echo.private('order.')
        .listen('PopularFeature', (e) => {
            console.log("hello");
            console.log(e.update);
        });

    Echo.channel('order')
        .listen('PopularFeature', (e) => {
            console.log(e.order.name);
        });
</script>

</body>
</html>
