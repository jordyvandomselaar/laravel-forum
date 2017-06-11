<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} Forum</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    @yield('head')
</head>
<body>
    <div class="container">
        @include('forum::partials.header')

        <div class="row">
            <div class="col-xs-12 col-sm-3" id="sidebar">
                @include('forum::partials.sidebar')
            </div>

            <div class="col-xs-12 col-sm-9">
                @yield('content')
            </div>
        </div>

        @include('forum::partials.footer')
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    @yield('foot')
</body>
</html>
