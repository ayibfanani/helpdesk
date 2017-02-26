<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ @$title }}</title>
    
    <link rel="stylesheet" href="/css/app.css">

    <script>
        window.Laravel = '{{ csrf_token() }}';
    </script>
</head>
<body>
    <div id="app">
        <navbar></navbar>
        {{-- <br> --}}
        <div class="container is-fluid">
            <div class="columns">
                <div class="column hero is-one-quarter is-hidden-mobile is-fullheight" id="sidebar">
                    <sidebar menu="{{ $sidebar or null }}"></sidebar>
                </div>
                <div class="column is-paddingless">
                    <br>
                    <div class="columns is-marginless">
                        @yield('content_head')
                    </div>

                    <hr>
                    <nav class="level" style="border-bottom: 1px solid #dbdbdb;">
                        @yield('content_neck')
                    </nav>

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>